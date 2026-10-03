<?php

// Galkacyo Café
// Main entry point

$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home',
    'menu',
    'gallery',
    'about',
    'contact'
];

if (!in_array($page, $allowedPages, true)) {
    $page = 'home';
}

require_once __DIR__ . '/includes/functions.php';

$pageFile = __DIR__ . '/pages/' . $page . '.php';

if (file_exists($pageFile)) {
    require $pageFile;
} else {
    require __DIR__ . '/pages/home.php';
}