<?php
$pageTitle = "Home Insurance in the UAE | Prime Policies";
$pageDesc = "Protect your home and belongings in the UAE against fire, theft, and natural disasters. Comprehensive home and contents insurance.";
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
            <h1>Home Insurance</h1>
            <p>Your home is your sanctuary. Keep it secure.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>Protecting UAE Homeowners & Tenants</h2>
                <p>Your home is your sanctuary. Whether you own a villa in Emirates Hills or rent an apartment in Downtown Dubai, protect your property, belongings, and personal liability against fire, theft, natural disasters (such as rare but impactful flooding), and unforeseen accidents.</p>
                <p>Many UAE residents mistakenly believe their landlord's insurance covers their personal belongings. It does not. Our contents insurance ensures your electronics, furniture, and valuables are protected, while our building insurance safeguards the physical structure for property owners.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-house-chimney"></i> <div><strong>Building Coverage:</strong> Essential for property owners to cover structural damage from fires, storms, or burst pipes.</div></li>
                    <li><i class="fa-solid fa-couch"></i> <div><strong>Contents Coverage:</strong> Perfect for tenants and owners. Replaces your furniture, electronics, and personal items in case of theft or damage.</div></li>
                    <li><i class="fa-solid fa-user-shield"></i> <div><strong>Alternative Accommodation:</strong> If your UAE home becomes uninhabitable due to a covered event, we cover the costs of a hotel or temporary rental.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Secure your sanctuary today</h2>
                <p>Home insurance in the UAE is more affordable than you think. Get protected today.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get a Home Quote</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
