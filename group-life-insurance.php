<?php
$pageTitle = "Group Life Insurance UAE | Prime Policies";
$pageDesc  = "Provide your workforce with essential group life insurance. An affordable corporate benefit that protects your employees and strengthens talent retention in the UAE.";
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
    .benefit-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px; margin-top: 48px; }
    .benefit-card { background: #f4f7fc; border-radius: 14px; padding: 28px 24px; text-align: center; }
    .benefit-card i  { font-size: 2.2rem; color: var(--secondary-color); margin-bottom: 14px; }
    .benefit-card h3 { color: var(--primary-color); font-size: 1.05rem; margin-bottom: 8px; }
    .benefit-card p  { font-size: 0.9rem; color: #555; line-height: 1.6; }
</style>';
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <p class="breadcrumb">
            <a href="<?= BASE_PATH ?>/life-insurance.php">Life Insurance</a> &rsaquo; Group Life Insurance
        </p>
        <h1>Group Life Insurance</h1>
        <p>An essential employee benefit that protects your workforce and strengthens your talent strategy.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Protect Your People. Strengthen Your Business.</h2>
            <p>Group Life Insurance is one of the most valued employee benefits a UAE employer can offer. It provides a tax-free lump-sum death benefit to the family of an employee who passes away while covered — giving your entire workforce the assurance that their loved ones are protected.</p>
            <p>Prime Policies designs scalable, cost-effective group life programmes for businesses of all sizes, from small SMEs to large multinationals operating across the UAE. Our team handles all administration, compliance, and renewals so you can focus on running your business.</p>

            <div class="benefit-grid">
                <div class="benefit-card">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Workforce Coverage</h3>
                    <p>All employees enrolled under a single policy — no individual medical underwriting required for standard cover.</p>
                </div>
                <div class="benefit-card">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Talent Retention</h3>
                    <p>Attract and retain top professionals by offering life insurance as part of a competitive UAE benefits package.</p>
                </div>
                <div class="benefit-card">
                    <i class="fa-solid fa-tag"></i>
                    <h3>Cost-Effective</h3>
                    <p>Group rates are significantly lower than individual policies, maximizing coverage value for your budget.</p>
                </div>
                <div class="benefit-card">
                    <i class="fa-solid fa-file-shield"></i>
                    <h3>Compliant &amp; Scalable</h3>
                    <p>Fully compliant with UAE labour law requirements, and scales seamlessly as your headcount grows.</p>
                </div>
            </div>

            <ul class="features-list" style="margin-top:48px;">
                <li><i class="fa-solid fa-circle-check"></i> <div><strong>Death-in-Service Benefit:</strong> A lump-sum payment (typically 2–4× annual salary) paid to the employee's nominated beneficiaries.</div></li>
                <li><i class="fa-solid fa-circle-check"></i> <div><strong>Accidental Death &amp; Disability (ADD):</strong> Optional riders covering permanent total disability or accidental death with enhanced payouts.</div></li>
                <li><i class="fa-solid fa-circle-check"></i> <div><strong>Gratuity Funding:</strong> Use group life structures to pre-fund end-of-service gratuity obligations, reducing balance-sheet liability.</div></li>
                <li><i class="fa-solid fa-circle-check"></i> <div><strong>Flexible Benefit Structures:</strong> Uniform cover or graded amounts based on salary band, seniority, or role.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Build a Benefits Package Your Team Values</h2>
            <p>Talk to a Prime Policies corporate benefits advisor to design the right group life programme for your business.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Request a Group Quote</a>
                <a href="<?= BASE_PATH ?>/life-insurance.php" class="btn btn-outline">View All Life Plans</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
