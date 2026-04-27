<?php
$pageTitle = "Commercial Insurance Solutions | Prime Policies UAE";
$pageDesc = "Safeguard your business with Prime Policies\' commercial insurance. Offering property, liability, marine cargo, and energy insurance for corporations.";
$extraCss = '<style>
        .page-header { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: var(--text-light); padding: 80px 0; text-align: center; }
        .page-header h1 { font-size: 3rem; margin-bottom: 15px; }
        .page-content { padding: 80px 0; background: #fff; }
        .service-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px; }
        .service-item { background: #f8f9fa; padding: 30px; border-radius: 12px; border-left: 4px solid var(--secondary-color); }
        .service-item h3 { margin-bottom: 15px; color: var(--primary-color); }
        .service-item i { font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px; }
        .service-cta { display: inline-block; margin-top: 20px; font-weight: 700; color: var(--secondary-color); text-decoration: none; font-size: 0.9rem; transition: transform 0.2s; }
        .service-cta:hover { transform: translateX(5px); }
        .service-cta i { font-size: 0.8rem; margin-left: 5px; color: inherit; }
    </style>';
include 'includes/header.php';
?>


    <section class="page-header">
        <div class="container">
            <h1>Commercial Insurance</h1>
            <p>Robust enterprise risk management tailored for modern businesses.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="seo-intro">
                <h2>Empowering Your Business to Thrive</h2>
                <p>Every business faces unique risks. Prime Policies provides bespoke commercial insurance solutions designed to mitigate operational liabilities and protect your bottom line. From small enterprises to multinational corporations, our corporate policies guarantee business continuity in an unpredictable world.</p>
            </div>

            <div class="service-list">
                <div class="service-item" id="property">
                    <i class="fa-regular fa-building"></i>
                    <h3>Property Insurance</h3>
                    <p>Protect your physical assets, buildings, and inventory against fire, natural disasters, theft, and accidental damage to ensure uninterrupted operations.</p>
                    <a href="<?= BASE_PATH ?>/property-insurance.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="engineering">
                    <i class="fa-solid fa-helmet-safety"></i>
                    <h3>Engineering Insurance</h3>
                    <p>Comprehensive cover for construction projects, machinery breakdown, and contractor's all-risk to secure heavy investments in engineering.</p>
                    <a href="<?= BASE_PATH ?>/engineering-insurance.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="accident">
                    <i class="fa-solid fa-person-falling-burst"></i>
                    <h3>General Accident</h3>
                    <p>Shield your business from a variety of operational accidents including money in transit, fidelity guarantee, and personal accident covers for employees.</p>
                    <a href="<?= BASE_PATH ?>/general-accident.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="marine">
                    <i class="fa-solid fa-ship"></i>
                    <h3>Marine Cargo</h3>
                    <p>Secure your goods in transit globally. We offer robust marine cargo insurance against loss, damage, or theft during sea, air, or land transportation.</p>
                    <a href="<?= BASE_PATH ?>/marine-cargo.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="liability">
                    <i class="fa-solid fa-gavel"></i>
                    <h3>Liability</h3>
                    <p>Safeguard your company against third-party claims for property damage, personal injury, and professional indemnity resulting from business operations.</p>
                    <a href="<?= BASE_PATH ?>/liability.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="energy">
                    <i class="fa-solid fa-bolt"></i>
                    <h3>Energy</h3>
                    <p>Specialized risk management for the oil, gas, and renewable energy sectors, covering both onshore and offshore operational assets and liabilities.</p>
                    <a href="<?= BASE_PATH ?>/energy-insurance.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="aviation">
                    <i class="fa-solid fa-plane"></i>
                    <h3>Aviation</h3>
                    <p>Tailored aviation insurance providing hull, liability, and specialized risk coverage for aircraft operators, airports, and aviation service providers.</p>
                    <a href="<?= BASE_PATH ?>/aviation-insurance.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="trade-credit">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <h3>Trade Credit Insurance</h3>
                    <p>Protect your accounts receivable from the risk of non-payment, insolvency, or protracted default, ensuring your cash flow remains secure.</p>
                    <a href="<?= BASE_PATH ?>/trade-credit.php" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Protect Your Enterprise Today</h2>
                <p>Consult with our commercial risk experts to build a resilient insurance portfolio.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Request Corporate Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
