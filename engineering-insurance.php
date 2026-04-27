<?php
$pageTitle = "Engineering Insurance | Prime Policies UAE";
$pageDesc  = "Comprehensive cover for construction projects, machinery breakdown, and contractor\'s all-risk to secure heavy investments in engineering.";
$extraCss  = '<style>
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
        <h1>Engineering Insurance</h1>
        <p>Secure your heavy investments in construction and machinery.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Robust Coverage for UAE's Construction Sector</h2>
            <p>The UAE's skyline is a testament to its engineering marvels. However, large-scale construction and heavy machinery operation carry immense financial risk. Our Engineering Insurance provides comprehensive cover for construction projects, machinery breakdown, and contractor's all-risk (CAR) to secure heavy investments in the engineering sector.</p>
            <p>Whether you are a developer, contractor, or plant operator, we mitigate the financial impact of project delays due to material damage or critical equipment failure.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-helmet-safety"></i> <div><strong>Contractor’s All Risk (CAR):</strong> Comprehensive protection for civil engineering projects against physical loss or damage during the construction phase.</div></li>
                <li><i class="fa-solid fa-gears"></i> <div><strong>Machinery Breakdown:</strong> Covers the sudden and unforeseen physical damage to electrical and mechanical machinery at work.</div></li>
                <li><i class="fa-solid fa-industry"></i> <div><strong>Plant & Equipment:</strong> Protection for heavy contractor equipment, excavators, and cranes against accidental damage on and off-site.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Build with Absolute Confidence</h2>
            <p>Partner with Prime Policies to secure your next major engineering project.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
