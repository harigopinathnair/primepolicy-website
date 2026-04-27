<?php
$pageTitle = "Individual Life Insurance UAE | Prime Policies";
$pageDesc  = "Term, whole, and universal life insurance plans designed to fit your long-term financial goals. Provide your family with a tax-free death benefit in the UAE.";
$extraCss  = '<style>
    .page-header { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: var(--text-light); padding: 80px 0; text-align: center; }
    .page-header h1 { font-size: 3rem; margin-bottom: 15px; }
    .page-header .breadcrumb { font-size: 0.9rem; opacity: 0.75; margin-bottom: 10px; }
    .page-header .breadcrumb a { color: rgba(255,255,255,0.85); text-decoration: underline; }
    .page-content { padding: 80px 0; background: #fff; }
    .service-details { max-width: 800px; margin: 0 auto; }
    .service-details h2 { color: var(--primary-color); margin-bottom: 20px; font-size: 2.2rem; }
    .service-details p { font-size: 1.1rem; margin-bottom: 20px; color: #555; }
    .features-list { margin-top: 40px; }
    .features-list li { margin-bottom: 15px; font-size: 1.1rem; display: flex; gap: 15px; align-items: flex-start; }
    .features-list i { color: var(--secondary-color); font-size: 1.4rem; margin-top: 3px; }
    .plan-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px; margin-top: 48px; }
    .plan-card { background: #f4f7fc; border-radius: 14px; padding: 28px 24px; border-top: 4px solid var(--secondary-color); }
    .plan-card h3 { color: var(--primary-color); font-size: 1.15rem; margin-bottom: 10px; }
    .plan-card p  { font-size: 0.93rem; color: #555; line-height: 1.65; }
</style>';
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <p class="breadcrumb">
            <a href="<?= BASE_PATH ?>/life-insurance.php">Life Insurance</a> &rsaquo; Individual Life Insurance
        </p>
        <h1>Individual Life Insurance</h1>
        <p>Secure your family's future with term, whole, or universal life plans tailored to your goals.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Protect the People Who Depend on You</h2>
            <p>Life is unpredictable. Individual Life Insurance provides a vital financial safety net ensuring your family can maintain their standard of living, pay off a mortgage, fund your children's education, and build toward the future — even if you are no longer there to provide for them.</p>
            <p>Prime Policies works with the UAE's leading life insurance carriers to find a policy that matches your coverage needs, financial goals, and premium budget — whether you want affordable temporary protection or lifelong coverage with a savings component.</p>

            <div class="plan-grid">
                <div class="plan-card">
                    <h3><i class="fa-solid fa-clock" style="color:var(--secondary-color);margin-right:8px;"></i>Term Life</h3>
                    <p>Pure protection for a set period (10, 20, or 30 years). The most affordable way to get a large death benefit — ideal for income replacement and mortgage protection.</p>
                </div>
                <div class="plan-card">
                    <h3><i class="fa-solid fa-infinity" style="color:var(--secondary-color);margin-right:8px;"></i>Whole Life</h3>
                    <p>Lifetime coverage with a guaranteed death benefit and a cash-value savings component that grows tax-deferred over time.</p>
                </div>
                <div class="plan-card">
                    <h3><i class="fa-solid fa-sliders" style="color:var(--secondary-color);margin-right:8px;"></i>Universal Life</h3>
                    <p>Flexible premiums and adjustable coverage amounts. Build cash value while enjoying the freedom to adapt the policy as your life circumstances change.</p>
                </div>
            </div>

            <ul class="features-list" style="margin-top:48px;">
                <li><i class="fa-solid fa-shield-halved"></i> <div><strong>Tax-Free Death Benefit:</strong> Your beneficiaries receive a lump sum, free of income tax, to secure their financial future.</div></li>
                <li><i class="fa-solid fa-piggy-bank"></i> <div><strong>Cash Value Accumulation:</strong> Whole and universal plans build a cash reserve you can borrow against or withdraw during your lifetime.</div></li>
                <li><i class="fa-solid fa-house"></i> <div><strong>Mortgage &amp; Debt Protection:</strong> Ensure outstanding loans are settled so your family is never forced to sell the family home.</div></li>
                <li><i class="fa-solid fa-graduation-cap"></i> <div><strong>Education Fund:</strong> Guarantee your children's education is funded regardless of what happens to you.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Secure Your Family's Future Today</h2>
            <p>Speak to a Prime Policies life insurance advisor to find the right plan for your needs and budget.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get a Life Insurance Quote</a>
                <a href="<?= BASE_PATH ?>/life-insurance.php" class="btn btn-outline">View All Life Plans</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
