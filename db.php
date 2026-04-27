<?php
// Root-relative base path — empty on production, /primepolicy_com on localhost
define('BASE_PATH', ($_SERVER['HTTP_HOST'] ?? '') === 'localhost' ? '/primepolicy_com' : '');

// Auto-detect environment to switch database credentials seamlessly
if (($_SERVER['HTTP_HOST'] ?? '') === 'localhost') {
    // Local WAMP Credentials
    $host = 'localhost';
    $dbname = 'primedatabase';
    $username = 'root';
    $password = '';
} else {
    // Live Server Credentials
    $host = 'localhost';
    $dbname = 'nqatsxqe_wp532';
    $username = 'nqatsxqe_wp532';
    $password = '41p]ySg7.h';
}

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


