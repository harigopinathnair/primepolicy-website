<?php
$pageTitle = "Medical Insurance | Prime Policies UAE";
$pageDesc = "Premium medical insurance plans for individuals and corporate groups. Experience peace of mind with Prime Policies\' top-tier healthcare coverage.";
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
            <h1>Medical Insurance</h1>
            <p>Prioritizing your health with premium medical coverage.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="seo-intro">
                <h2>Your Health is Your Greatest Asset</h2>
                <p>Ensure access to the best healthcare facilities locally and globally with Prime Policies' Medical Insurance plans. Whether you are seeking coverage for yourself, your family, or your entire corporate workforce, we provide flexible, comprehensive medical networks that prioritize well-being above all else.</p>
            </div>

            <div class="service-list">
                <div class="service-item" id="individual">
                    <i class="fa-solid fa-user-nurse"></i>
                    <h3>Individual Medical Insurance</h3>
                    <p>Tailored health plans for you and your family. Enjoy expansive clinic networks, inpatient and outpatient covers, maternity benefits, and emergency medical assistance. We customize our packages to fit your lifestyle and healthcare needs.</p>
                    <a href="<?= BASE_PATH ?>/medical-insurance.php#individual" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="service-item" id="group">
                    <i class="fa-solid fa-users-rectangle"></i>
                    <h3>Group Medical Insurance</h3>
                    <p>Attract and retain top talent by offering premium health benefits. Our corporate medical plans are scalable, compliant with local regulations, and provide cost-effective health management solutions for businesses of any size.</p>
                    <a href="<?= BASE_PATH ?>/medical-insurance.php#group" class="service-cta">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Get comprehensive health cover today</h2>
                <p>Speak to our medical insurance experts to discover the right network and plan for your needs.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Find the Right Medical Plan</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
