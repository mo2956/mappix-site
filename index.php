<?php
$page = $_GET['page'] ?? 'home';
$title = strtoupper($page);

include __DIR__ . '/includes/header.php';

$allowed = ['home', 'contact'];

if (!in_array($page, $allowed)) {
    echo "<h2>404 - Page introuvable</h2>";
} else {
    include __DIR__ . "/pages/$page.php";
}

include __DIR__ . '/includes/footer.php';