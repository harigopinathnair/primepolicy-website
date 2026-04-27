<?php
$pageTitle = "Travel Insurance from the UAE | Prime Policies";
$pageDesc = "Travel the world worry-free from the UAE. Our travel insurance covers trip cancellations, medical emergencies, and lost baggage globally.";
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
            <h1>Travel Insurance</h1>
            <p>Travel the world worry-free from the UAE.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>Global Protection for UAE Residents</h2>
                <p>Whether you are flying out of DXB for a quick business trip to Europe or taking the family on a month-long holiday, our travel insurance plans have you covered globally. From trip cancellations to emergency medical assistance overseas, we ensure your journeys are safe and secure.</p>
                <p>Schengen visa requirements and unpredictable global events make robust travel insurance a necessity for UAE residents. Our policies guarantee quick support, reliable payouts, and 24/7 global assistance hotlines.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-briefcase-medical"></i> <div><strong>Emergency Medical Expenses:</strong> Covers unexpected illnesses or accidents abroad, including medical evacuation and repatriation.</div></li>
                    <li><i class="fa-solid fa-plane-slash"></i> <div><strong>Trip Cancellation & Delay:</strong> Compensation for non-refundable expenses if your trip is cancelled or severely delayed due to covered reasons.</div></li>
                    <li><i class="fa-solid fa-suitcase"></i> <div><strong>Lost Baggage & Passport:</strong> Financial support to replace lost luggage and assistance in recovering lost passports while traveling.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Ready for your next adventure?</h2>
                <p>Buy your travel insurance online in minutes and instantly receive your Schengen-approved certificate.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Travel Insurance</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
