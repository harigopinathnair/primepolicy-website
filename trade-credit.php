<?php
$pageTitle = "Trade Credit Insurance | Prime Policies UAE";
$pageDesc  = "Protect your accounts receivable from the risk of non-payment, insolvency, or protracted default, ensuring your cash flow remains secure.";
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
        <h1>Trade Credit Insurance</h1>
        <p>Protect your cash flow against customer insolvency and default.</p>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="service-details">
            <h2>Secure Your Accounts Receivable</h2>
            <p>For B2B companies, unpaid invoices can severely impact cash flow and profitability. Trade Credit Insurance protects your accounts receivable from the risk of non-payment, insolvency, or protracted default, ensuring your cash flow remains secure even when your buyers fail to pay.</p>
            <p>In an unpredictable global economy, this coverage acts as a vital financial safety net, empowering you to offer competitive credit terms to new clients in the UAE and abroad, facilitating safe business expansion.</p>
            
            <ul class="features-list">
                <li><i class="fa-solid fa-file-invoice-dollar"></i> <div><strong>Bad Debt Protection:</strong> Indemnification for unpaid invoices if a client declares bankruptcy or simply defaults on payment.</div></li>
                <li><i class="fa-solid fa-magnifying-glass-chart"></i> <div><strong>Risk Monitoring:</strong> Access to valuable credit intelligence and ongoing financial monitoring of your key buyers.</div></li>
                <li><i class="fa-solid fa-hand-holding-dollar"></i> <div><strong>Improved Financing:</strong> Enhanced borrowing power, as banks often view insured receivables as secure collateral.</div></li>
            </ul>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2>Grow Your Business Without the Credit Risk</h2>
            <p>Protect your bottom line and safely extend credit to your customers.</p>
            <div class="cta-buttons">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-primary">Get Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
