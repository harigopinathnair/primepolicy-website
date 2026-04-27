<?php
require_once 'db.php';
ini_set('display_errors', '0');
ob_start();
register_shutdown_function(function () {
    $e = error_get_last();
    if ($e && ($e['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR))) {
        while (ob_get_level()) ob_end_clean();
        if (!headers_sent()) header('Content-Type: application/json');
        echo json_encode(['ok' => false, 'error' => '[PHP] ' . $e['message']]);
    }
});

// GET: redirect from AJAX success
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!empty($_GET['submitted'])) {
        $name = htmlspecialchars(trim($_GET['name'] ?? 'there'));
    } else {
        header('Location: ' . BASE_PATH . '/index.php');
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    function json_out_s(bool $ok, string $msg = '', string $name = ''): void {
        ob_end_clean();
        header('Content-Type: application/json');
        echo json_encode(['ok' => $ok, 'error' => $msg, 'name' => $name]);
        exit;
    }

    require_once __DIR__ . '/includes/captcha.php';
    if (!captcha_check()) {
        if ($is_ajax) json_out_s(false, 'Incorrect anti-spam answer. Please try again.');
        header('Location: ' . BASE_PATH . '/index.php#contact');
        exit;
    }

    $form_type = $_POST['form_type'] ?? 'contact';
    $name      = htmlspecialchars(trim($_POST['name'] ?? 'there'));

    try {
        $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
            id           INT(11)        AUTO_INCREMENT PRIMARY KEY,
            name         VARCHAR(255)   NOT NULL DEFAULT '',
            email        VARCHAR(255)   NOT NULL DEFAULT '',
            phone        VARCHAR(50)    NOT NULL DEFAULT '',
            source       VARCHAR(20)    NOT NULL DEFAULT 'contact',
            budget       VARCHAR(100)   NOT NULL DEFAULT '',
            goal         TEXT,
            challenge    VARCHAR(255)   NOT NULL DEFAULT '',
            status       VARCHAR(30)    NOT NULL DEFAULT 'new',
            value        DECIMAL(12,2)  NOT NULL DEFAULT 0,
            comment      TEXT,
            utm_url      VARCHAR(1000)  NOT NULL DEFAULT '',
            utm_source   VARCHAR(255)   NOT NULL DEFAULT '',
            utm_medium   VARCHAR(255)   NOT NULL DEFAULT '',
            utm_campaign VARCHAR(255)   NOT NULL DEFAULT '',
            utm_content  VARCHAR(255)   NOT NULL DEFAULT '',
            pricing_plan VARCHAR(255)   NOT NULL DEFAULT '',
            created_at   TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
            updated_at   TIMESTAMP      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

        // Auto-migrate columns
        $existing_cols = $pdo->query("DESCRIBE leads")->fetchAll(PDO::FETCH_COLUMN);
        $migrations = [
            'utm_url'      => "ALTER TABLE leads ADD COLUMN utm_url      VARCHAR(1000) NOT NULL DEFAULT ''",
            'utm_source'   => "ALTER TABLE leads ADD COLUMN utm_source   VARCHAR(255)  NOT NULL DEFAULT ''",
            'utm_medium'   => "ALTER TABLE leads ADD COLUMN utm_medium   VARCHAR(255)  NOT NULL DEFAULT ''",
            'utm_campaign' => "ALTER TABLE leads ADD COLUMN utm_campaign VARCHAR(255)  NOT NULL DEFAULT ''",
            'utm_content'  => "ALTER TABLE leads ADD COLUMN utm_content  VARCHAR(255)  NOT NULL DEFAULT ''",
            'pricing_plan' => "ALTER TABLE leads ADD COLUMN pricing_plan VARCHAR(255)  NOT NULL DEFAULT ''",
        ];
        foreach ($migrations as $col => $sql) {
            if (!in_array($col, $existing_cols)) $pdo->exec($sql);
        }

        $lead_data = [
            'name'         => trim($_POST['name']         ?? ''),
            'email'        => trim($_POST['email']        ?? ''),
            'phone'        => trim($_POST['phone']        ?? ''),
            'source'       => $form_type,
            'budget'       => trim($_POST['budget']       ?? ''),
            'goal'         => trim($_POST['goal']         ?? ''),
            'challenge'    => trim($_POST['challenge']    ?? ''),
            'utm_url'      => trim($_POST['utm_url']      ?? ''),
            'utm_source'   => trim($_POST['utm_source']   ?? ''),
            'utm_medium'   => trim($_POST['utm_medium']   ?? ''),
            'utm_campaign' => trim($_POST['utm_campaign'] ?? ''),
            'utm_content'  => trim($_POST['utm_content']  ?? ''),
            'pricing_plan' => trim($_POST['pricing_plan'] ?? ''),
            'plan_value'   => 0,
        ];

        $stmt = $pdo->prepare("INSERT INTO leads
            (name, email, phone, source, budget, goal, challenge,
             utm_url, utm_source, utm_medium, utm_campaign, utm_content,
             pricing_plan, value, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'new')");
        $stmt->execute([
            $lead_data['name'], $lead_data['email'], $lead_data['phone'],
            $lead_data['source'], $lead_data['budget'], $lead_data['goal'],
            $lead_data['challenge'], $lead_data['utm_url'], $lead_data['utm_source'],
            $lead_data['utm_medium'], $lead_data['utm_campaign'], $lead_data['utm_content'],
            $lead_data['pricing_plan'], $lead_data['plan_value'],
        ]);

        require_once __DIR__ . '/mailer.php';
        send_lead_notification($lead_data);

    } catch (Exception $e) {
        error_log('Lead save error: ' . $e->getMessage());
    }

    if ($is_ajax) json_out_s(true, '', $name);

} // end POST block
ob_end_clean();

$pageTitle = "Quote Request Received | Prime Policies";
$pageDesc  = "Thank you for reaching out to Prime Policies. Our team will review your request and contact you within 24 hours.";
$extraCss  = '<style>
.success-section { min-height: calc(100vh - 160px); display: flex; align-items: center; justify-content: center; background: #f4f7fc; padding: 4rem 0; }
.success-card { background: #fff; border-radius: 16px; padding: 4rem 3.5rem; max-width: 580px; width: 100%; text-align: center; box-shadow: 0 16px 48px rgba(11,26,74,0.10); border: 1px solid #e5e7eb; }
.success-icon { width: 72px; height: 72px; background: #dbeafe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; }
.success-card h2 { font-size: 2.2rem; margin-bottom: 1rem; color: var(--primary-color); }
.success-card p { font-size: 1.05rem; color: #555; line-height: 1.7; margin-bottom: 2rem; }
.next-steps { background: #f4f7fc; border-radius: 10px; padding: 1.5rem; text-align: left; margin-bottom: 2rem; }
.next-steps h4 { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--secondary-color); font-weight: 700; margin-bottom: 1rem; }
.next-steps ul { list-style: none; padding: 0; }
.next-steps li { font-size: 0.95rem; color: var(--primary-color); font-weight: 500; padding: 0.55rem 0; border-bottom: 1px solid #e5e7eb; display: flex; align-items: center; gap: 0.75rem; }
.next-steps li:last-child { border-bottom: none; }
.next-steps li::before { content: "\2713"; width: 22px; height: 22px; flex-shrink: 0; background: #dbeafe; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 0.75rem; font-weight: 900; }
.success-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
.btn-pp-primary  { background: var(--primary-color); color: #fff; padding: 12px 28px; border-radius: 30px; font-weight: 700; font-size: 1rem; transition: background 0.2s; }
.btn-pp-primary:hover { background: var(--secondary-color); color: #fff; }
.btn-pp-outline  { border: 2px solid var(--primary-color); color: var(--primary-color); padding: 12px 28px; border-radius: 30px; font-weight: 700; font-size: 1rem; transition: all 0.2s; }
.btn-pp-outline:hover { background: var(--primary-color); color: #fff; }
</style>';
include 'includes/header.php';
?>

<section class="success-section">
    <div class="success-card">
        <div class="success-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M20 6L9 17L4 12" stroke="#1a73e8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <h2>Enquiry Received!</h2>

        <p>Thank you, <strong><?= $name ?? 'there' ?></strong>. We've received your insurance enquiry and one of our advisors will review it and get back to you <strong>within 24 hours</strong>.</p>

        <div class="next-steps">
            <h4>What Happens Next</h4>
            <ul>
                <li>Our advisor reviews your coverage requirements</li>
                <li>We compare quotes from leading UAE insurers</li>
                <li>You receive a tailored quote within 24 hours</li>
            </ul>
        </div>

        <div class="success-actions">
            <a href="<?= BASE_PATH ?>/index.php" class="btn-pp-primary">Back to Homepage</a>
            <a href="<?= BASE_PATH ?>/blog.php"  class="btn-pp-outline">Read Our Blog</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
