<?php
$pageTitle = "Liability Insurance | Prime Policies UAE";
$pageDesc  = "Safeguard your company against third-party claims for property damage, personal injury, and professional indemnity resulting from business operations.";
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
        <h1>Liability Insurance</h1>
        <p>Safeguard your company against severe third-party claims.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Essential Protection for Modern Businesses</h2>
            <p>In today's litigious corporate environment, a single lawsuit can threaten the financial survival of a business. We safeguard your company against third-party claims for property damage, personal injury, and professional indemnity resulting from your business operations, products, or professional advice.</p>
            <p>For UAE consultants, contractors, and public-facing businesses, maintaining robust liability coverage is often a strict regulatory requirement or a prerequisite for securing high-value contracts.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-users-viewfinder"></i> <div><strong>Public Liability:</strong> Protection against claims of bodily injury or property damage to third parties on your premises or due to your business activities.</div></li>
                <li><i class="fa-solid fa-user-tie"></i> <div><strong>Professional Indemnity:</strong> Crucial for consultants and agencies; covers the costs of defending against claims of professional negligence or inadequate advice.</div></li>
                <li><i class="fa-solid fa-box-open"></i> <div><strong>Product Liability:</strong> Protects manufacturers and distributors against legal liability for injuries or damages caused by defective products.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Operate with Confidence</h2>
            <p>Ensure your business is protected against legal liabilities and third-party claims.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
