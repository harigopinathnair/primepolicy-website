<?php
$pageTitle = "Energy Insurance | Prime Policies UAE";
$pageDesc  = "Specialized risk management for the oil, gas, and renewable energy sectors, covering both onshore and offshore operational assets and liabilities.";
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
        <h1>Energy Insurance</h1>
        <p>Specialized risk management for the oil, gas, and renewable sectors.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Powering the UAE's Energy Infrastructure</h2>
            <p>The energy sector presents some of the most complex and high-value risks in the world. Prime Policies offers specialized risk management for the oil, gas, and renewable energy sectors, covering both onshore and offshore operational assets and liabilities.</p>
            <p>As the UAE transitions toward renewable energy while maintaining its robust traditional energy infrastructure, we provide custom-engineered insurance programs that address physical damage, control of well, and complex pollution liabilities.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-oil-well"></i> <div><strong>Onshore & Offshore Assets:</strong> Comprehensive property damage coverage for refineries, pipelines, rigs, and renewable energy installations (solar/wind).</div></li>
                <li><i class="fa-solid fa-fire-flame-curved"></i> <div><strong>Control of Well (OEE):</strong> Covers the immense expenses associated with regaining control of a blowout, including redrilling and pollution cleanup.</div></li>
                <li><i class="fa-solid fa-smog"></i> <div><strong>Pollution Liability:</strong> Financial protection against third-party claims resulting from sudden and accidental environmental contamination.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Secure Your Energy Investments</h2>
            <p>Speak to our specialist energy brokers for complex risk mitigation.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
