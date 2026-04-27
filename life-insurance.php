<?php
$pageTitle = "Life Insurance | Prime Policies UAE";
$pageDesc = "Secure your family\'s future with life insurance policies from Prime Policies. Explore individual and group life insurance plans designed for ultimate peace of mind.";
$extraCss = '<style>
        .page-header { background: linear-gradient(135deg, var(--primary-color), #0f2a6a); color: var(--text-light); padding: 80px 0; text-align: center; }
        .page-header h1 { font-size: 3rem; margin-bottom: 15px; }
        .page-content { padding: 80px 0; background: #fff; }
        .service-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px; }
        .service-item { background: #f8f9fa; padding: 30px; border-radius: 12px; border-left: 4px solid var(--secondary-color); }
        .service-item h3 { margin-bottom: 15px; color: var(--primary-color); }
        .service-item i { font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px; }
    </style>';
include 'includes/header.php';
?>


    <section class="page-header">
        <div class="container">
            <h1>Life Insurance</h1>
            <p>Financial security for the people who depend on you the most.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="seo-intro">
                <h2>Protecting Your Legacy</h2>
                <p>Life is unpredictable, but your family's financial security doesn't have to be. Prime Policies offers robust Life Insurance solutions that act as a crucial safety net. Our policies ensure that in the event of the unforeseen, your loved ones are provided for, mortgages can be paid, and your legacy remains intact.</p>
            </div>

            <div class="service-list">
                <a href="<?= BASE_PATH ?>/individual-life-insurance.php" class="service-item" id="individual" style="display:block;text-decoration:none;color:inherit;transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 8px 24px rgba(26,115,232,0.15)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
                    <i class="fa-solid fa-heart-circle-check"></i>
                    <h3>Individual Life Insurance</h3>
                    <p>Term, whole, and universal life insurance plans designed to fit your long-term financial goals. Provide your family with a tax-free death benefit and secure their standard of living, education, and future.</p>
                    <p style="margin-top:12px;color:var(--secondary-color);font-weight:600;font-size:0.95rem;">Learn more &rarr;</p>
                </a>
                <a href="<?= BASE_PATH ?>/group-life-insurance.php" class="service-item" id="group" style="display:block;text-decoration:none;color:inherit;transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 8px 24px rgba(26,115,232,0.15)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Group Life Insurance</h3>
                    <p>An essential employee benefit that provides life coverage to your workforce. Enhance your corporate benefits package and offer your employees the ultimate peace of mind knowing their families are protected.</p>
                    <p style="margin-top:12px;color:var(--secondary-color);font-weight:600;font-size:0.95rem;">Learn more &rarr;</p>
                </a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Secure their future today</h2>
                <p>Our life insurance advisors are ready to help you plan for the unexpected.</p>
                <div class="cta-buttons">
                    <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Speak to an Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
