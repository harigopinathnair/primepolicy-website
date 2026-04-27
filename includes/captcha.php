<?php
if (session_status() === PHP_SESSION_NONE) session_start();

function captcha_generate(): array {
    $a = rand(2, 9);
    $b = rand(1, 9);
    $_SESSION['captcha_answer'] = $a + $b;
    return ['question' => "$a + $b"];
}

function captcha_check(): bool {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $expected = $_SESSION['captcha_answer'] ?? null;
    $given    = (int)trim($_POST['captcha'] ?? '');
    unset($_SESSION['captcha_answer']);
    return $expected !== null && $given === (int)$expected;
}

function captcha_html(bool $inline = false): string {
    $cap = captcha_generate();
    $wrap = $inline
        ? 'style="display:flex;align-items:center;gap:10px;margin-top:0.5rem;"'
        : 'style="margin-top:1rem;"';
    return '<div class="captcha-wrap" ' . $wrap . '>
        <label for="captcha" style="font-size:0.9rem;font-weight:600;white-space:nowrap;">Anti-spam: What is <strong>' . htmlspecialchars($cap['question']) . '</strong>?</label>
        <input type="number" name="captcha" id="captcha" required placeholder="Answer"
               style="width:80px;padding:8px 12px;border:1px solid #ccc;border-radius:6px;font-size:0.95rem;">
    </div>';
}
