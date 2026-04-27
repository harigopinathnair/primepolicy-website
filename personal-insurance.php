<?php
$pageTitle = "Personal Insurance Solutions | Prime Policies UAE";
$pageDesc = "Secure your future with Prime Policies\' comprehensive personal insurance plans. Covering motor, home, travel, and more. Get a customized quote today.";
$extraCss = '<style>
        .page-header {
            background: linear-gradient(135deg, var(--primary-color), #0f2a6a);
            color: var(--text-light);
            padding: 80px 0;
            text-align: center;
        }
        .page-header h1 { font-size: 3rem; margin-bottom: 15px; }
        .page-content { padding: 80px 0; background: #fff; }
        .service-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px; }
        .service-item { background: #f8f9fa; padding: 30px; border-radius: 12px; border-left: 4px solid var(--secondary-color); }
        .service-item h3 { margin-bottom: 15px; color: var(--primary-color); }
        .service-item i { font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px; }
    </style>';
include 'includes/header.php';
?>


    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Personal Insurance</h1>
            <p>Comprehensive protection for you, your family, and your valuable assets.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="page-content">
        <div class="container">
            <div class="seo-intro">
                <h2>Protecting What Matters Most to You</h2>
                <p>At Prime Policies, we understand that your personal assets and well-being are invaluable. That is why we offer an extensive portfolio of Personal Insurance solutions designed to give you total peace of mind. Whether you are driving on the road, traveling abroad, or simply enjoying your home, our coverage options ensure you are shielded against the unexpected.</p>
            </div>

            <div class="service-list">
                <div class="service-item" id="motor">
                    <i class="fa-solid fa-car"></i>
                    <h3>Motor Insurance</h3>
                    <p>Drive with confidence. Our motor insurance policies offer comprehensive coverage against accidents, theft, and third-party liabilities, ensuring you are protected on every journey.</p>
                </div>
                <div class="service-item" id="gap">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Gap Insurance</h3>
                    <p>Protect your investment. Gap insurance covers the difference between the actual cash value of your vehicle and the balance still owed on your financing if your car is totaled or stolen.</p>
                </div>
                <div class="service-item" id="protect-plus">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h3>Protect Plus Insurance</h3>
                    <p>An enhanced layer of security offering extended coverage benefits for high-value assets and unique personal risks, giving you premium protection when standard policies fall short.</p>
                </div>
                <div class="service-item" id="travel">
                    <i class="fa-solid fa-plane-departure"></i>
                    <h3>Travel Insurance</h3>
                    <p>Travel the world worry-free. From trip cancellations to emergency medical assistance overseas, our travel insurance plans have you covered globally.</p>
                </div>
                <div class="service-item" id="home">
                    <i class="fa-solid fa-house"></i>
                    <h3>Home Insurance</h3>
                    <p>Your home is your sanctuary. Protect your property, belongings, and personal liability against fire, theft, natural disasters, and unforeseen accidents.</p>
                </div>
                <div class="service-item" id="malpractice">
                    <i class="fa-solid fa-user-doctor"></i>
                    <h3>Medical Malpractice</h3>
                    <p>Essential coverage for healthcare professionals. Safeguard your career and finances against claims of negligence, ensuring you can practice with peace of mind.</p>
                </div>
                <div class="service-item" id="liability">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <h3>Third Party Liability</h3>
                    <p>Comprehensive protection against claims made by others for injury or property damage caused by your non-professional daily activities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to secure your personal assets?</h2>
                <p>Speak to our personal insurance experts today to find the perfect plan tailored to your lifestyle.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
