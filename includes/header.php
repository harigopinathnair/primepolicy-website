<?php
// Bootstrap DB + tracking for every page that includes this header
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../db.php';
}
require_once __DIR__ . '/tracking.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Prime Policies | Your Trusted Insurance Partner in the UAE' ?></title>
    <meta name="description" content="<?= $pageDesc ?? 'Prime Policies offers tailored insurance solutions, from Personal to Commercial and Medical Insurance. Get your custom quote today!' ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>/assets/css/style.css">
    <?php if (isset($extraCss)) { echo $extraCss; } ?>

    <!-- Tracking (GTM head snippet) -->
    <?= $custom_code_head ?? '' ?>
</head>
<body>

    <!-- GTM noscript body snippet -->
    <?= $custom_code_body ?? '' ?>

    <!-- Header -->
    <header class="site-header">
        <div class="container header-container">
            <div class="logo">
                <a href="<?= BASE_PATH ?>/index.php">
                    <img src="<?= BASE_PATH ?>/assets/img/LogoTransparent-PrimePolicies.png" alt="Prime Policies Logo">
                </a>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="<?= BASE_PATH ?>/index.php">Home</a></li>
                    <li><a href="<?= BASE_PATH ?>/index.php#about">About</a></li>
                    <li class="has-dropdown">
                        <a href="<?= BASE_PATH ?>/personal-insurance.php">Personal <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?= BASE_PATH ?>/motor-insurance.php">Motor Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/gap-insurance.php">Gap Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/protect-plus-insurance.php">Protect Plus Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/travel-insurance.php">Travel Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/home-insurance.php">Home Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/medical-malpractice.php">Medical Malpractice</a></li>
                            <li><a href="<?= BASE_PATH ?>/third-party-liability.php">Third Party Liability</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?= BASE_PATH ?>/commercial-insurance.php">Commercial <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?= BASE_PATH ?>/property-insurance.php">Property Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/engineering-insurance.php">Engineering Insurance</a></li>
                            <li><a href="<?= BASE_PATH ?>/general-accident.php">General Accident</a></li>
                            <li><a href="<?= BASE_PATH ?>/marine-cargo.php">Marine Cargo</a></li>
                            <li><a href="<?= BASE_PATH ?>/liability.php">Liability</a></li>
                            <li><a href="<?= BASE_PATH ?>/energy-insurance.php">Energy</a></li>
                            <li><a href="<?= BASE_PATH ?>/aviation-insurance.php">Aviation</a></li>
                            <li><a href="<?= BASE_PATH ?>/trade-credit.php">Trade Credit Insurance</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?= BASE_PATH ?>/medical-insurance.php">Medical <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?= BASE_PATH ?>/medical-insurance.php#individual">Individual Medical</a></li>
                            <li><a href="<?= BASE_PATH ?>/medical-insurance.php#group">Group Medical</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?= BASE_PATH ?>/life-insurance.php">Life <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?= BASE_PATH ?>/individual-life-insurance.php">Individual Life</a></li>
                            <li><a href="<?= BASE_PATH ?>/group-life-insurance.php">Group Life</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= BASE_PATH ?>/blog.php">Blog</a></li>
                    <li><a href="<?= BASE_PATH ?>/index.php#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="header-action">
                <a href="<?= BASE_PATH ?>/index.php#quote" class="btn btn-outline">Get Custom Quote</a>
            </div>
        </div>
    </header>
