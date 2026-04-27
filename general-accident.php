<?php
$pageTitle = "General Accident Insurance | Prime Policies UAE";
$pageDesc  = "Shield your business from a variety of operational accidents including money in transit, fidelity guarantee, and personal accident covers.";
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
        <h1>General Accident Insurance</h1>
        <p>Shield your business from unpredictable operational risks.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Comprehensive Operational Risk Management</h2>
            <p>No matter how stringent your internal controls are, everyday business operations face unpredictable threats. General Accident Insurance is a broad category designed to shield your business from a variety of operational accidents including money in transit, fidelity guarantee, and personal accident covers for your employees.</p>
            <p>In the dynamic UAE market, protecting your financial assets from theft, employee dishonesty, and workplace accidents is vital for maintaining steady operations and safeguarding your bottom line.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-money-bill-transfer"></i> <div><strong>Money Insurance:</strong> Protects cash, cheques, and financial instruments while in transit or stored securely on your premises.</div></li>
                <li><i class="fa-solid fa-user-lock"></i> <div><strong>Fidelity Guarantee:</strong> Protects your company against direct financial loss resulting from fraudulent or dishonest acts by employees.</div></li>
                <li><i class="fa-solid fa-user-injured"></i> <div><strong>Group Personal Accident:</strong> Provides compensation for your employees in the event of accidental death or permanent disability, functioning as a valuable employee benefit.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Close the Gaps in Your Coverage</h2>
            <p>Ensure your day-to-day operations are fully protected from unexpected financial losses.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
