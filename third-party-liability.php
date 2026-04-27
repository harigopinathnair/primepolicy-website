<?php
$pageTitle = "Third Party Liability Insurance | Prime Policies UAE";
$pageDesc = "Comprehensive protection against claims made by others for injury or property damage in the UAE. Shield your personal wealth with Third Party Liability insurance.";
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
            <h1>Third Party Liability</h1>
            <p>Comprehensive protection against daily personal liabilities.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>Protect Your Personal Wealth in the UAE</h2>
                <p>Accidents happen. Prime Policies offers comprehensive protection against claims made by others for injury or property damage caused by your non-professional daily activities. Without adequate liability insurance, a simple mishap could jeopardize your personal savings and assets.</p>
                <p>In the UAE, where medical costs and legal compensation can be exceptionally high, having a robust personal liability policy protects you from the financial fallout of accidental damage caused by you, your family members, or even your pets to a third party.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-person-falling"></i> <div><strong>Bodily Injury Coverage:</strong> Covers the medical expenses and legal compensation if you accidentally injure someone (e.g., during recreational sports or cycling).</div></li>
                    <li><i class="fa-solid fa-house-crack"></i> <div><strong>Property Damage:</strong> Pays for the repair or replacement of someone else's property that you accidentally damage.</div></li>
                    <li><i class="fa-solid fa-gavel"></i> <div><strong>Legal Defense:</strong> Should a third-party claim escalate to the UAE courts, your policy covers the extensive legal fees required to mount a defense.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Live without the fear of the unexpected</h2>
                <p>Secure your personal liability coverage and protect your assets from third-party claims.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Covered Now</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
