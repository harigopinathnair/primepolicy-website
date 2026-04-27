<?php
$pageTitle = "Comprehensive Motor Insurance in UAE | Prime Policies";
$pageDesc = "Drive with confidence across Dubai, Abu Dhabi, and the UAE with Prime Policies\' motor insurance. Comprehensive coverage against accidents, theft, and third-party liabilities.";
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
            <h1>Motor Insurance in UAE</h1>
            <p>Drive with absolute confidence on every journey across the Emirates.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>Comprehensive Coverage for UAE Drivers</h2>
                <p>Navigating the busy roads of Dubai, Abu Dhabi, or the wider UAE requires a motor insurance policy you can truly rely on. Our motor insurance policies offer comprehensive coverage against accidents, theft, and third-party liabilities, ensuring you are protected on every journey.</p>
                <p>We understand the unique driving conditions in the Emirates. Whether you're commuting down Sheikh Zayed Road or exploring the Northern Emirates, our tailored packages provide seamless claims processes, agency repairs, and 24/7 roadside assistance.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-shield-halved"></i> <div><strong>Comprehensive & Third-Party Options:</strong> Choose between full comprehensive cover including agency repair, or essential third-party liability to comply with UAE traffic laws.</div></li>
                    <li><i class="fa-solid fa-car-burst"></i> <div><strong>Accident & Theft Protection:</strong> Guaranteed financial protection against vehicle damage, total loss, fire, and theft.</div></li>
                    <li><i class="fa-solid fa-truck-pickup"></i> <div><strong>24/7 Roadside Assistance:</strong> Breakdowns in the UAE summer heat can be stressful. Enjoy complimentary towing, battery boosting, and flat tire assistance anywhere in the UAE.</div></li>
                    <li><i class="fa-solid fa-globe"></i> <div><strong>Oman Extension:</strong> Frequent traveler to Oman? Extend your geographic coverage easily.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Get Your Motor Insurance Quote Today</h2>
                <p>Instant coverage, competitive rates, and unparalleled support for UAE residents.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
