<?php
$pageTitle = "Marine Cargo Insurance | Prime Policies UAE";
$pageDesc  = "Secure your goods in transit globally. We offer robust marine cargo insurance against loss, damage, or theft during sea, air, or land transportation.";
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
        <h1>Marine Cargo Insurance</h1>
        <p>Secure your goods in transit across the globe.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Protecting the Lifeblood of UAE Trade</h2>
            <p>As a global logistics hub, the UAE relies heavily on the import and export of goods. We offer robust marine cargo insurance against loss, damage, or theft during sea, air, or land transportation, ensuring your supply chain remains financially secure from point of origin to final destination.</p>
            <p>Whether you are shipping bulk commodities, fragile electronics, or raw materials, our "Institute Cargo Clauses" compliant policies provide door-to-door protection against the unpredictable nature of global transit.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-ship"></i> <div><strong>All-Risk Transit Cover:</strong> Comprehensive protection against physical damage or loss from external causes during sea, air, or land freight.</div></li>
                <li><i class="fa-solid fa-boxes-packing"></i> <div><strong>Open Cover Policies:</strong> Ideal for frequent shippers, providing automatic continuous coverage for all shipments declared.</div></li>
                <li><i class="fa-solid fa-anchor"></i> <div><strong>General Average Protection:</strong> Protects cargo owners from significant shared liabilities if a vessel faces an emergency at sea.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Navigate Global Trade Securely</h2>
            <p>Speak to our marine logistics insurance specialists for comprehensive transit coverage.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
