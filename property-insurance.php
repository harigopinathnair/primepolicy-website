<?php
$pageTitle = "Property Insurance | Prime Policies UAE";
$pageDesc  = "Protect your physical assets, buildings, and inventory against fire, natural disasters, theft, and accidental damage to ensure uninterrupted operations.";
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
        <h1>Property Insurance</h1>
        <p>Protect your physical assets and ensure uninterrupted operations.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Comprehensive Protection for Your Business Assets</h2>
            <p>From towering commercial real estate in Dubai to sprawling warehouses in JAFZA, your physical assets are the foundation of your business. Our Property Insurance policies are designed to protect your buildings, inventory, machinery, and office contents against fire, natural disasters, theft, and accidental damage.</p>
            <p>We provide tailored "All Risks" cover that ensures that even in the event of catastrophic physical loss, your business has the financial backing to rebuild and resume operations swiftly.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-building"></i> <div><strong>Building & Contents Cover:</strong> Comprehensive protection for the physical structure and all interior assets, including specialized equipment and stock.</div></li>
                <li><i class="fa-solid fa-fire"></i> <div><strong>Fire & Allied Perils:</strong> Protects against core risks like fire, lightning, storms, and unpredictable water damage.</div></li>
                <li><i class="fa-solid fa-chart-line"></i> <div><strong>Business Interruption:</strong> Optional add-on to cover lost income and ongoing operational expenses while your property is being repaired.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Secure your corporate assets today</h2>
            <p>Speak to our commercial brokers to structure a customized property risk management plan.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
