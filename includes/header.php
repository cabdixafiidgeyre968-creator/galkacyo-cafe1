<?php

require_once __DIR__ . '/data.php';

$pageTitle = $pageTitle ?? $site['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= e($pageTitle) ?> | <?= e($site['name']) ?></title>

    <meta
        name="description"
        content="<?= e($site['description']) ?>"
    >

    <link
        rel="stylesheet"
        href="<?= asset_url('css/style.css') ?>"
    >
</head>

<body>