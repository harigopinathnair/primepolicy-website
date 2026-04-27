<?php
$pageTitle = "Protect Plus Insurance | Prime Policies UAE";
$pageDesc = "Premium protection for high-value assets and unique personal risks in the UAE. Prime Policies Protect Plus offers extended coverage benefits.";
$extraCss = '<style>
        .page-header { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: var(--text-light); padding: 80px 0; text-align: center; }
        .page-header h1 { font-size: 3rem; margin-bottom: 15px; }
        .page-content { padding: 80px 0; background: #fff; }
        .service-details { max-width: 800px; margin: 0 auto; }
        .service-details h2 { color: var(--primary-color); margin-bottom: 20px; font-size: 2.2rem; }
        .service-details p { font-size: 1.1rem; margin-bottom: 20px; color: #555; }
        .features-list { margin-top: 40px; }
        .features-list li { margin-bottom: 15px; font-size: 1.1rem; display: flex; gap: 15px; align-items: flex-start; }
        .features-list i { color: var(--secondary-color); font-size: 1.4rem; margin-top: 3px; }
    </style>';
include 'includes/header.php';
?>


    <section class="page-header">
        <div class="container">
            <h1>Protect Plus Insurance</h1>
            <p>Premium coverage for high-net-worth individuals and high-value assets.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>When Standard Policies Fall Short</h2>
                <p>Protect Plus Insurance is an enhanced layer of security offering extended coverage benefits for high-value assets and unique personal risks, giving you premium protection when standard policies fall short.</p>
                <p>The UAE is home to exceptional lifestyles, luxury assets, fine art, and high-net-worth portfolios. Standard insurance limits often do not cover the true replacement value of these elite assets. Protect Plus acts as an overarching umbrella, significantly increasing your liability limits and providing worldwide coverage for your most precious belongings, ensuring your legacy in Dubai, Abu Dhabi, or abroad is secure.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-gem"></i> <div><strong>High-Value Asset Protection:</strong> Specialized coverage for fine art, luxury watches, bespoke jewelry, and collectibles without standard sub-limits.</div></li>
                    <li><i class="fa-solid fa-umbrella"></i> <div><strong>Umbrella Liability:</strong> Millions of Dirhams in extended personal liability coverage, protecting your wealth from severe legal claims.</div></li>
                    <li><i class="fa-solid fa-earth-americas"></i> <div><strong>Worldwide Coverage:</strong> Your luxury items are protected not just in the UAE, but wherever you travel globally.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Upgrade to Premium Protection</h2>
                <p>Contact our Private Client team for a confidential review of your asset portfolio.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
