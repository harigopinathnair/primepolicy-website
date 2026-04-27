<?php
$pageTitle = "Medical Malpractice Insurance | Prime Policies UAE";
$pageDesc = "Essential Medical Malpractice coverage for healthcare professionals in Dubai, Abu Dhabi, and across the UAE. Safeguard your career against negligence claims.";
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
            <h1>Medical Malpractice Insurance</h1>
            <p>Essential coverage for healthcare professionals in the UAE.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="service-details">
                <h2>Safeguard Your Medical Career</h2>
                <p>As a medical professional practicing in the UAE, providing exceptional care is your priority. However, the risk of malpractice allegations is a reality of modern healthcare. Prime Policies provides essential coverage for healthcare professionals to safeguard your career and finances against claims of negligence, ensuring you can practice with absolute peace of mind.</p>
                <p>Our policies are fully compliant with the Dubai Health Authority (DHA), Department of Health (DOH) Abu Dhabi, and the Ministry of Health and Prevention (MOHAP) requirements for licensing.</p>
                
                <ul class="features-list">
                    <li><i class="fa-solid fa-stethoscope"></i> <div><strong>Professional Indemnity:</strong> Coverage against legal liability for injuries, death, or damages arising out of a breach of professional duty.</div></li>
                    <li><i class="fa-solid fa-scale-balanced"></i> <div><strong>Legal Defense Costs:</strong> Comprehensive coverage for legal fees, court costs, and expert witnesses required to defend your reputation.</div></li>
                    <li><i class="fa-solid fa-file-contract"></i> <div><strong>DHA/DOH Compliant:</strong> Tailored specifically to meet the mandatory malpractice insurance limits required to maintain your UAE medical license.</div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Practice with Confidence</h2>
                <p>Secure your DHA/DOH compliant malpractice insurance and protect your reputation.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Request a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
