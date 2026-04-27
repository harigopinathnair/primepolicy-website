<?php
/**
 * Lead notification mailer for Prime Policies.
 * Uses PHP mail() as a baseline. Replace with an SMTP/API provider for production.
 */
function send_lead_notification(array $data): void {
    $to      = 'info@primepolicies.com';
    $subject = 'New Insurance Enquiry: ' . ($data['name'] ?: 'Unknown');

    $body  = "A new enquiry has been submitted via the Prime Policies website.\n\n";
    $body .= str_repeat('-', 50) . "\n";

    $labels = [
        'name'         => 'Name',
        'email'        => 'Email',
        'phone'        => 'Phone',
        'source'       => 'Form Type',
        'budget'       => 'Budget / Coverage Needed',
        'goal'         => 'Message / Goal',
        'challenge'    => 'Insurance Type',
        'pricing_plan' => 'Plan Selected',
        'utm_source'   => 'UTM Source',
        'utm_medium'   => 'UTM Medium',
        'utm_campaign' => 'UTM Campaign',
        'utm_url'      => 'Landing Page',
    ];

    foreach ($labels as $key => $label) {
        $val = trim($data[$key] ?? '');
        if ($val !== '') {
            $body .= "$label: $val\n";
        }
    }

    $body .= str_repeat('-', 50) . "\n";
    $body .= "Submitted at: " . date('Y-m-d H:i:s') . " (server time)\n";

    $headers = implode("\r\n", [
        'From: Prime Policies Website <noreply@primepolicies.com>',
        'Reply-To: ' . ($data['email'] ?? $to),
        'Content-Type: text/plain; charset=utf-8',
        'X-Mailer: PHP/' . phpversion(),
    ]);

    @mail($to, $subject, $body, $headers);
}
