<?php
require_once 'db.php';

// Auto-create tables needed by the blog
$pdo->exec("CREATE TABLE IF NOT EXISTS posts (
    id          INT(11)      AUTO_INCREMENT PRIMARY KEY,
    title       VARCHAR(255) NOT NULL DEFAULT '',
    slug        VARCHAR(191) NOT NULL UNIQUE,
    category    VARCHAR(100) NOT NULL DEFAULT '',
    excerpt     TEXT,
    content     LONGTEXT,
    image_url   VARCHAR(500) DEFAULT NULL,
    status      VARCHAR(20)  NOT NULL DEFAULT 'draft',
    meta_title  VARCHAR(255) DEFAULT NULL,
    meta_desc   VARCHAR(255) DEFAULT NULL,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

// Pagination
$per_page = 6;
$page     = max(1, (int)($_GET['page'] ?? 1));
$offset   = ($page - 1) * $per_page;
$category = trim($_GET['cat'] ?? '');

if ($category !== '') {
    $total_stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE status = 'published' AND category = ?");
    $total_stmt->execute([$category]);
    $posts_stmt = $pdo->prepare("SELECT id, title, slug, category, excerpt, image_url, created_at FROM posts WHERE status = 'published' AND category = ? ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $posts_stmt->bindValue(1, $category, PDO::PARAM_STR);
    $posts_stmt->bindValue(2, $per_page, PDO::PARAM_INT);
    $posts_stmt->bindValue(3, $offset,   PDO::PARAM_INT);
    $posts_stmt->execute();
} else {
    $total_stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE status = 'published'");
    $total_stmt->execute();
    $posts_stmt = $pdo->prepare("SELECT id, title, slug, category, excerpt, image_url, created_at FROM posts WHERE status = 'published' ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $posts_stmt->bindValue(1, $per_page, PDO::PARAM_INT);
    $posts_stmt->bindValue(2, $offset,   PDO::PARAM_INT);
    $posts_stmt->execute();
}

$total_posts = (int)$total_stmt->fetchColumn();
$posts       = $posts_stmt->fetchAll(PDO::FETCH_ASSOC);
$total_pages = (int)ceil($total_posts / $per_page);

$cats_stmt  = $pdo->query("SELECT DISTINCT category FROM posts WHERE status = 'published' ORDER BY category ASC");
$categories = $cats_stmt->fetchAll(PDO::FETCH_COLUMN);

function fmt_date_b(string $date): string {
    return date('M j, Y', strtotime($date));
}

require_once 'includes/captcha.php';

$pageTitle = "Insurance Blog | Prime Policies UAE";
$pageDesc  = "Insurance guides, tips, and UAE coverage news from the Prime Policies team. Stay informed and protect what matters most.";
$extraCss  = '<style>
.blog-hero { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: #fff; padding: 80px 0; text-align: center; }
.blog-hero h1 { font-size: 3rem; margin-bottom: 14px; }
.blog-hero p  { font-size: 1.15rem; opacity: 0.85; max-width: 600px; margin: 0 auto; }
.blog-body    { background: #f4f7fc; padding: 60px 0 80px; }
.cat-filter   { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 36px; }
.cat-pill     { padding: 7px 18px; border: 1.5px solid #d1d9e6; border-radius: 20px; font-size: 0.88rem; font-weight: 600; color: #555; background: #fff; transition: all 0.2s; }
.cat-pill:hover, .cat-pill.active { background: var(--secondary-color); border-color: var(--secondary-color); color: #fff; }
.blog-grid    { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
.blog-card    { background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 18px rgba(11,26,74,0.07); transition: transform 0.25s, box-shadow 0.25s; display: flex; flex-direction: column; }
.blog-card:hover { transform: translateY(-6px); box-shadow: 0 12px 32px rgba(11,26,74,0.13); }
.blog-image   { height: 190px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); display: flex; align-items: center; justify-content: center; padding: 1.5rem; text-align: center; }
.blog-image h3 { color: #fff; font-size: 1.1rem; margin: 0; line-height: 1.35; font-weight: 700; }
.blog-content  { padding: 20px 22px 24px; flex: 1; display: flex; flex-direction: column; }
.blog-tag      { display: inline-block; background: #eef2ff; color: var(--secondary-color); font-size: 0.78rem; font-weight: 700; padding: 3px 10px; border-radius: 12px; margin-bottom: 10px; letter-spacing: 0.3px; text-transform: uppercase; }
.blog-excerpt  { font-size: 0.92rem; color: #555; line-height: 1.6; flex: 1; margin-bottom: 14px; }
.blog-meta     { display: flex; justify-content: space-between; align-items: center; font-size: 0.82rem; color: #888; margin-top: auto; }
.blog-meta .read-more { color: var(--secondary-color); font-weight: 600; }
.pagination    { display: flex; gap: 8px; justify-content: center; margin-top: 48px; flex-wrap: wrap; }
.page-btn      { padding: 9px 18px; border: 1.5px solid #d1d9e6; border-radius: 8px; background: #fff; font-size: 0.9rem; font-weight: 600; color: #444; transition: all 0.2s; }
.page-btn:hover, .page-btn.active { background: var(--secondary-color); border-color: var(--secondary-color); color: #fff; }
.nl-section    { background: var(--primary-color); padding: 70px 0; color: #fff; }
.nl-grid2      { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.nl-title      { font-size: 2rem; margin-bottom: 12px; }
.nl-sub        { opacity: 0.82; font-size: 1rem; }
.nl-row        { display: flex; gap: 0; margin-top: 20px; }
.nl-inp        { flex: 1; padding: 13px 18px; border: none; border-radius: 30px 0 0 30px; font-size: 1rem; font-family: var(--font-body); }
.nl-inp:focus  { outline: none; }
.nl-sub-btn    { padding: 13px 26px; background: var(--accent-color); color: var(--primary-color); border: none; border-radius: 0 30px 30px 0; font-size: 1rem; font-weight: 700; cursor: pointer; font-family: var(--font-heading); transition: opacity 0.2s; }
.nl-sub-btn:hover { opacity: 0.85; }
.nl-fb         { display: none; margin-top: 10px; font-size: 0.92rem; font-weight: 600; }
.nl-fb.ok  { display: block; color: #6ee7b7; }
.nl-fb.err { display: block; color: #fca5a5; }
@media (max-width: 900px) { .blog-grid { grid-template-columns: repeat(2,1fr); } }
@media (max-width: 600px) { .blog-grid { grid-template-columns: 1fr; } .nl-grid2 { grid-template-columns: 1fr; } .nl-row { flex-direction:column; } .nl-inp { border-radius:30px; margin-bottom:10px; } .nl-sub-btn { border-radius:30px; } }
</style>';
include 'includes/header.php';
?>

<!-- Blog Hero -->
<section class="blog-hero">
    <div class="container">
        <h1>Insurance Insights</h1>
        <p>Expert guides, UAE coverage updates, and tips to help you make smarter insurance decisions.</p>
    </div>
</section>

<!-- Posts -->
<section class="blog-body">
    <div class="container">

        <?php if (!empty($categories)): ?>
        <div class="cat-filter">
            <a href="<?= BASE_PATH ?>/blog.php" class="cat-pill<?= $category === '' ? ' active' : '' ?>">All</a>
            <?php foreach ($categories as $c): ?>
                <a href="<?= BASE_PATH ?>/blog.php?cat=<?= urlencode($c) ?>" class="cat-pill<?= $category === $c ? ' active' : '' ?>"><?= htmlspecialchars($c) ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (empty($posts)): ?>
            <div style="text-align:center; padding:4rem 0; color:#777;">
                <p style="font-size:1.2rem;">No posts found<?= $category ? ' in "' . htmlspecialchars($category) . '"' : '' ?>.</p>
                <a href="<?= BASE_PATH ?>/blog.php" class="btn btn-outline" style="margin-top:1.5rem; border-color:var(--secondary-color); color:var(--secondary-color);">View All Posts</a>
            </div>
        <?php else: ?>
            <div class="blog-grid">
                <?php foreach ($posts as $post): ?>
                <?php $post_url = BASE_PATH . '/single-post.php?slug=' . urlencode($post['slug']); ?>
                <div class="blog-card">
                    <a href="<?= $post_url ?>" class="blog-image">
                        <h3><?= htmlspecialchars($post['title']) ?></h3>
                    </a>
                    <div class="blog-content">
                        <span class="blog-tag"><?= htmlspecialchars($post['category']) ?></span>
                        <p class="blog-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
                        <div class="blog-meta">
                            <span><?= fmt_date_b($post['created_at']) ?></span>
                            <a href="<?= $post_url ?>" class="read-more">Read Article &rarr;</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if ($total_pages > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="<?= BASE_PATH ?>/blog.php?page=<?= $page - 1 ?><?= $category ? '&cat=' . urlencode($category) : '' ?>" class="page-btn">&larr; Prev</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="<?= BASE_PATH ?>/blog.php?page=<?= $i ?><?= $category ? '&cat=' . urlencode($category) : '' ?>" class="page-btn<?= $i === $page ? ' active' : '' ?>"><?= $i ?></a>
                <?php endfor; ?>
                <?php if ($page < $total_pages): ?>
                    <a href="<?= BASE_PATH ?>/blog.php?page=<?= $page + 1 ?><?= $category ? '&cat=' . urlencode($category) : '' ?>" class="page-btn">Next &rarr;</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</section>

<!-- Newsletter -->
<section class="nl-section">
    <div class="container">
        <div class="nl-grid2">
            <div>
                <h2 class="nl-title">Stay Informed on Insurance</h2>
                <p class="nl-sub">Subscribe for UAE insurance tips, coverage updates, and exclusive offers. No spam.</p>
            </div>
            <div>
                <div class="nl-fb" id="blog-nl-msg"></div>
                <form id="blog-nl-form" method="POST" action="<?= BASE_PATH ?>/newsletter.php">
                    <input type="hidden" name="source"       value="blog">
                    <input type="hidden" name="page_url"     class="js-utm-url"      value="">
                    <input type="hidden" name="utm_source"   class="js-utm-source"   value="">
                    <input type="hidden" name="utm_medium"   class="js-utm-medium"   value="">
                    <input type="hidden" name="utm_campaign" class="js-utm-campaign" value="">
                    <input type="hidden" name="utm_content"  class="js-utm-content"  value="">
                    <input type="hidden" name="utm_term"     class="js-utm-term"     value="">
                    <div class="nl-row">
                        <input type="email" name="email" class="nl-inp" placeholder="Enter your email address" required>
                        <button type="submit" class="nl-sub-btn">Subscribe</button>
                    </div>
                    <?= captcha_html(true) ?>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
(function () {
    const params  = new URLSearchParams(window.location.search);
    const utmKeys = ['source', 'medium', 'campaign', 'content', 'term'];
    utmKeys.forEach(k => { const v = params.get('utm_' + k); if (v) sessionStorage.setItem('utm_' + k, v); });
    if (params.toString()) sessionStorage.setItem('utm_url', window.location.href);

    document.querySelectorAll('.js-utm-url').forEach(el      => el.value = sessionStorage.getItem('utm_url')      || window.location.href);
    document.querySelectorAll('.js-utm-source').forEach(el   => el.value = sessionStorage.getItem('utm_source')   || '');
    document.querySelectorAll('.js-utm-medium').forEach(el   => el.value = sessionStorage.getItem('utm_medium')   || '');
    document.querySelectorAll('.js-utm-campaign').forEach(el => el.value = sessionStorage.getItem('utm_campaign') || '');
    document.querySelectorAll('.js-utm-content').forEach(el  => el.value = sessionStorage.getItem('utm_content')  || '');
    document.querySelectorAll('.js-utm-term').forEach(el     => el.value = sessionStorage.getItem('utm_term')     || '');

    const form = document.getElementById('blog-nl-form');
    const msg  = document.getElementById('blog-nl-msg');
    if (form && msg) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            msg.className = 'nl-fb';
            const btn  = form.querySelector('[type="submit"]');
            const orig = btn.innerHTML;
            btn.disabled = true; btn.innerHTML = 'Subscribing…';
            try {
                const res  = await fetch(form.action, { method:'POST', body: new FormData(form), headers:{'X-Requested-With':'XMLHttpRequest'} });
                const data = await res.json();
                if (data.ok) { msg.className = 'nl-fb ok'; msg.textContent = "You're subscribed! Expect insurance tips in your inbox soon."; form.reset(); }
                else         { msg.className = 'nl-fb err'; msg.textContent = data.error || 'Something went wrong. Please try again.'; }
            } catch { msg.className = 'nl-fb err'; msg.textContent = 'Network error. Please try again.'; }
            btn.disabled = false; btn.innerHTML = orig;
        });
    }
})();
</script>
