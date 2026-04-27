<?php
$pageTitle = "Aviation Insurance | Prime Policies UAE";
$pageDesc  = "Tailored aviation insurance providing hull, liability, and specialized risk coverage for aircraft operators, airports, and aviation service providers.";
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
        <h1>Aviation Insurance</h1>
        <p>Comprehensive coverage for operators, airports, and service providers.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Navigating the Risks of Global Aviation</h2>
            <p>Operating in the aviation sector requires precision, and your insurance should be no different. We deliver tailored aviation insurance providing hull, liability, and specialized risk coverage for commercial airlines, corporate aircraft operators, airports, and aviation service providers.</p>
            <p>With the UAE serving as a premier global aviation hub, we ensure our clients have access to robust international capacity to cover multi-million dollar assets and catastrophic liability limits.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-plane"></i> <div><strong>Hull All Risks:</strong> Covers physical loss or damage to the aircraft whether in flight, taxiing, or on the ground.</div></li>
                <li><i class="fa-solid fa-plane-circle-exclamation"></i> <div><strong>Aviation Liability:</strong> Protects operators against claims for bodily injury to passengers and third parties, as well as property damage.</div></li>
                <li><i class="fa-solid fa-plane-departure"></i> <div><strong>Airport & Ground Handlers:</strong> Comprehensive liability coverage for airside service providers, maintenance facilities, and airport operators.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Take Your Business to the Skies Safely</h2>
            <p>Contact our aviation team to secure specialized coverage for your fleet.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
