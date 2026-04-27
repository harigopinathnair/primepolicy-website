<?php
require_once 'db.php';
require_once 'includes/captcha.php';

// Ensure posts table exists
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

$slug = trim($_GET['slug'] ?? '');

if ($slug === '') {
    header('Location: ' . BASE_PATH . '/blog.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM posts WHERE slug = ? AND status = 'published' LIMIT 1");
$stmt->execute([$slug]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    http_response_code(404);
    $pageTitle = "Post Not Found | Prime Policies";
    $pageDesc  = "The article you are looking for could not be found.";
    include 'includes/header.php';
    ?>
    <section style="padding:8rem 0;text-align:center;">
        <div class="container">
            <h1 style="font-size:5rem;color:#d1d9e6;">404</h1>
            <h2 style="margin-bottom:1rem;">Post Not Found</h2>
            <p style="color:#777;margin-bottom:2rem;">The article you are looking for doesn't exist or has been removed.</p>
            <a href="<?= BASE_PATH ?>/blog.php" class="btn btn-primary" style="background:var(--secondary-color);color:#fff;">Back to Blog</a>
        </div>
    </section>
    <?php
    include 'includes/footer.php';
    exit;
}

// Prev / next posts
$prev_stmt = $pdo->prepare("SELECT title, slug FROM posts WHERE status = 'published' AND created_at < ? ORDER BY created_at DESC LIMIT 1");
$prev_stmt->execute([$post['created_at']]);
$prev_post = $prev_stmt->fetch(PDO::FETCH_ASSOC);

$next_stmt = $pdo->prepare("SELECT title, slug FROM posts WHERE status = 'published' AND created_at > ? ORDER BY created_at ASC LIMIT 1");
$next_stmt->execute([$post['created_at']]);
$next_post = $next_stmt->fetch(PDO::FETCH_ASSOC);

// Related posts
$rel_stmt = $pdo->prepare("SELECT title, slug, category, excerpt, created_at FROM posts WHERE status = 'published' AND category = ? AND slug != ? ORDER BY created_at DESC LIMIT 3");
$rel_stmt->execute([$post['category'], $post['slug']]);
$related = $rel_stmt->fetchAll(PDO::FETCH_ASSOC);

function fmt_date_sp(string $d): string { return date('M j, Y', strtotime($d)); }

$word_count = str_word_count(strip_tags($post['content']));
$read_time  = max(1, (int)round($word_count / 200));

// Company info shown in "About the Author" card
$company_name  = 'Prime Policies';
$company_title = 'Your Trusted Insurance Partner in the UAE';
$company_bio   = 'Prime Policies connects individuals and businesses across the UAE with tailored insurance solutions. Our team of certified advisors helps you find the right coverage at the best rates.';

// Allow override from settings table
try {
    $s = $pdo->prepare("SELECT `key`, value FROM settings WHERE `key` IN ('author_name','author_title','author_bio','author_photo')");
    $s->execute();
    $settings = array_column($s->fetchAll(PDO::FETCH_ASSOC), 'value', 'key');
    if (!empty($settings['author_name']))  $company_name  = $settings['author_name'];
    if (!empty($settings['author_title'])) $company_title = $settings['author_title'];
    if (!empty($settings['author_bio']))   $company_bio   = $settings['author_bio'];
    $author_photo = $settings['author_photo'] ?? '';
} catch (Exception $e) { $author_photo = ''; }

$_proto   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$_base    = $_proto . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/';
$canonical = $_proto . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/blog/' . rawurlencode($post['slug']);

$pageTitle = htmlspecialchars($post['title']) . ' | Prime Policies';
$pageDesc  = htmlspecialchars($post['excerpt']);
$extraCss  = '<style>
.post-hero { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: #fff; padding: 60px 0 50px; text-align: center; }
.post-hero .post-cat { display: inline-block; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3); color: #fff; font-size: 0.8rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; padding: 4px 14px; border-radius: 20px; margin-bottom: 18px; }
.post-hero h1 { font-size: clamp(1.8rem,4vw,3rem); max-width: 820px; margin: 0 auto 20px; line-height: 1.2; }
.post-hero-meta { display: flex; align-items: center; gap: 12px; justify-content: center; font-size: 0.9rem; opacity: 0.85; }
.article-wrap { max-width: 820px; margin: 60px auto; padding: 0 20px 60px; }
.article-content h2 { font-size: 1.8rem; color: var(--primary-color); margin: 2.2rem 0 0.9rem; }
.article-content h3 { font-size: 1.4rem; color: var(--primary-color); margin: 1.8rem 0 0.7rem; }
.article-content p  { font-size: 1.05rem; line-height: 1.85; color: #444; margin-bottom: 1.2rem; }
.article-content ul,
.article-content ol { margin: 1rem 0 1.4rem 1.5rem; }
.article-content li { font-size: 1.03rem; line-height: 1.75; color: #444; margin-bottom: 0.5rem; }
.article-content blockquote { border-left: 4px solid var(--secondary-color); background: #f4f7fc; padding: 16px 20px; margin: 1.8rem 0; border-radius: 0 8px 8px 0; font-style: italic; color: #555; }
.article-content table { width: 100%; border-collapse: collapse; margin: 1.6rem 0; font-size: 0.95rem; }
.article-content th { background: var(--primary-color); color: #fff; padding: 10px 14px; text-align: left; }
.article-content td { padding: 9px 14px; border-bottom: 1px solid #e5e7eb; color: #444; }
.article-content tr:nth-child(even) td { background: #f9fafb; }
.post-nav { display: flex; justify-content: space-between; gap: 20px; margin-top: 50px; padding-top: 30px; border-top: 1px solid #e5e7eb; }
.post-nav-link { display: flex; flex-direction: column; gap: 4px; max-width: 48%; }
.post-nav-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #888; font-weight: 700; }
.post-nav-title { font-size: 0.97rem; font-weight: 600; color: var(--secondary-color); line-height: 1.4; }
.author-card { background: #f4f7fc; border-radius: 14px; padding: 28px; display: flex; gap: 20px; align-items: flex-start; margin-top: 48px; }
.author-avatar { width: 64px; height: 64px; border-radius: 50%; background: var(--secondary-color); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; flex-shrink: 0; object-fit: cover; }
.author-body .written-by { font-size: 0.78rem; text-transform: uppercase; letter-spacing: 1px; color: #888; font-weight: 700; margin-bottom: 4px; }
.author-body h4 { font-size: 1.05rem; color: var(--primary-color); margin-bottom: 3px; }
.author-body .author-title-line { font-size: 0.88rem; color: var(--secondary-color); font-weight: 600; margin-bottom: 10px; }
.author-body p  { font-size: 0.92rem; color: #555; line-height: 1.7; }
.related-section { background: #f4f7fc; padding: 60px 0 80px; }
.related-section h3 { font-size: 1.6rem; color: var(--primary-color); margin-bottom: 28px; text-align: center; }
.blog-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; }
.blog-card { background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 18px rgba(11,26,74,0.07); transition: transform 0.25s; display: flex; flex-direction: column; }
.blog-card:hover { transform: translateY(-5px); }
.blog-img-cover { height: 160px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); display: flex; align-items: center; justify-content: center; padding: 1rem; text-align: center; }
.blog-img-cover h4 { color: #fff; font-size: 1rem; margin: 0; line-height: 1.35; }
.blog-body-r { padding: 18px 20px 22px; flex: 1; display: flex; flex-direction: column; }
.blog-tag-r { display: inline-block; background: #eef2ff; color: var(--secondary-color); font-size: 0.76rem; font-weight: 700; padding: 3px 9px; border-radius: 10px; margin-bottom: 9px; text-transform: uppercase; }
.blog-excerpt-r { font-size: 0.9rem; color: #555; line-height: 1.6; flex: 1; margin-bottom: 12px; }
.blog-meta-r { display: flex; justify-content: space-between; font-size: 0.8rem; color: #888; margin-top: auto; }
.blog-meta-r .rm { color: var(--secondary-color); font-weight: 600; }
.nl-post-section { background: var(--primary-color); color: #fff; padding: 60px 0; }
.nl-post-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
.nl-post-grid h2 { font-size: 1.9rem; margin-bottom: 10px; }
.nl-post-grid p  { opacity: 0.82; font-size: 1rem; }
.nlp-row { display: flex; gap: 0; margin-top: 18px; }
.nlp-inp { flex: 1; padding: 13px 18px; border: none; border-radius: 30px 0 0 30px; font-size: 1rem; font-family: var(--font-body); }
.nlp-inp:focus { outline: none; }
.nlp-btn { padding: 13px 24px; background: var(--accent-color); color: var(--primary-color); border: none; border-radius: 0 30px 30px 0; font-size: 1rem; font-weight: 700; cursor: pointer; font-family: var(--font-heading); transition: opacity 0.2s; }
.nlp-btn:hover { opacity: 0.85; }
.nlp-fb { display: none; margin-top: 10px; font-size: 0.9rem; font-weight: 600; }
.nlp-fb.ok  { display: block; color: #6ee7b7; }
.nlp-fb.err { display: block; color: #fca5a5; }
@media (max-width: 768px) {
    .blog-grid { grid-template-columns: 1fr; }
    .nl-post-grid { grid-template-columns: 1fr; }
    .nlp-row { flex-direction: column; }
    .nlp-inp { border-radius: 30px; margin-bottom: 10px; }
    .nlp-btn { border-radius: 30px; }
    .post-nav { flex-direction: column; }
    .post-nav-link { max-width: 100%; }
    .author-card { flex-direction: column; }
}
</style>
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">';
include 'includes/header.php';
?>

<!-- Post Hero -->
<section class="post-hero">
    <div class="container">
        <span class="post-cat"><?= htmlspecialchars($post['category']) ?></span>
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <div class="post-hero-meta">
            <span><?= fmt_date_sp($post['created_at']) ?></span>
            <span>&middot;</span>
            <span><?= $read_time ?> min read</span>
        </div>
    </div>
</section>

<!-- Article -->
<div class="article-wrap">
    <div class="article-content">
        <?= $post['content'] ?>
    </div>

    <!-- Prev / Next Navigation -->
    <?php if ($prev_post || $next_post): ?>
    <div class="post-nav">
        <div>
            <?php if ($prev_post): ?>
            <a href="<?= BASE_PATH ?>/blog/<?= urlencode($prev_post['slug']) ?>" class="post-nav-link">
                <span class="post-nav-label">&larr; Previous</span>
                <span class="post-nav-title"><?= htmlspecialchars($prev_post['title']) ?></span>
            </a>
            <?php endif; ?>
        </div>
        <div style="text-align:right;">
            <?php if ($next_post): ?>
            <a href="<?= BASE_PATH ?>/blog/<?= urlencode($next_post['slug']) ?>" class="post-nav-link" style="align-items:flex-end;">
                <span class="post-nav-label">Next &rarr;</span>
                <span class="post-nav-title"><?= htmlspecialchars($next_post['title']) ?></span>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- About the Author / Company -->
    <div class="author-card">
        <?php if (!empty($author_photo)): ?>
            <img src="<?= BASE_PATH ?>/<?= htmlspecialchars($author_photo) ?>" alt="<?= htmlspecialchars($company_name) ?>" class="author-avatar">
        <?php else: ?>
            <div class="author-avatar"><i class="fa-solid fa-shield-halved"></i></div>
        <?php endif; ?>
        <div class="author-body">
            <p class="written-by">Published by</p>
            <h4><?= htmlspecialchars($company_name) ?></h4>
            <p class="author-title-line"><?= htmlspecialchars($company_title) ?></p>
            <p><?= nl2br(htmlspecialchars($company_bio)) ?></p>
        </div>
    </div>
</div>

<!-- Related Posts -->
<?php if (!empty($related)): ?>
<section class="related-section">
    <div class="container">
        <h3>More in <?= htmlspecialchars($post['category']) ?></h3>
        <div class="blog-grid" style="grid-template-columns: repeat(<?= min(count($related), 3) ?>, 1fr);">
            <?php foreach ($related as $r): ?>
            <a href="<?= BASE_PATH ?>/blog/<?= urlencode($r['slug']) ?>" class="blog-card">
                <div class="blog-img-cover">
                    <h4><?= htmlspecialchars($r['title']) ?></h4>
                </div>
                <div class="blog-body-r">
                    <span class="blog-tag-r"><?= htmlspecialchars($r['category']) ?></span>
                    <p class="blog-excerpt-r"><?= htmlspecialchars($r['excerpt']) ?></p>
                    <div class="blog-meta-r">
                        <span><?= fmt_date_sp($r['created_at']) ?></span>
                        <span class="rm">Read &rarr;</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center;margin-top:36px;">
            <a href="<?= BASE_PATH ?>/blog.php" class="btn btn-outline" style="border-color:var(--secondary-color);color:var(--secondary-color);">View All Articles &rarr;</a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Newsletter -->
<section class="nl-post-section">
    <div class="container">
        <div class="nl-post-grid">
            <div>
                <h2>Stay Informed on Insurance</h2>
                <p>Subscribe for UAE insurance news, coverage tips, and exclusive offers. No spam, ever.</p>
            </div>
            <div>
                <div class="nlp-fb" id="post-nl-msg"></div>
                <form id="post-nl-form" method="POST" action="<?= BASE_PATH ?>/newsletter.php">
                    <input type="hidden" name="source"       value="post-footer">
                    <input type="hidden" name="page_url"     class="js-utm-url"      value="">
                    <input type="hidden" name="utm_source"   class="js-utm-source"   value="">
                    <input type="hidden" name="utm_medium"   class="js-utm-medium"   value="">
                    <input type="hidden" name="utm_campaign" class="js-utm-campaign" value="">
                    <input type="hidden" name="utm_content"  class="js-utm-content"  value="">
                    <input type="hidden" name="utm_term"     class="js-utm-term"     value="">
                    <div class="nlp-row">
                        <input type="email" name="email" class="nlp-inp" placeholder="Enter your email address" required>
                        <button type="submit" class="nlp-btn">Subscribe</button>
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

    const form = document.getElementById('post-nl-form');
    const msg  = document.getElementById('post-nl-msg');
    if (form && msg) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            msg.className = 'nlp-fb';
            const btn  = form.querySelector('[type="submit"]');
            const orig = btn.innerHTML;
            btn.disabled = true; btn.innerHTML = 'Subscribing…';
            try {
                const res  = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: {'X-Requested-With':'XMLHttpRequest'} });
                const data = await res.json();
                if (data.ok) { msg.className = 'nlp-fb ok'; msg.textContent = "You're subscribed! Insurance tips on their way."; form.reset(); }
                else         { msg.className = 'nlp-fb err'; msg.textContent = data.error || 'Something went wrong. Please try again.'; }
            } catch { msg.className = 'nlp-fb err'; msg.textContent = 'Network error. Please try again.'; }
            btn.disabled = false; btn.innerHTML = orig;
        });
    }
})();
</script>
