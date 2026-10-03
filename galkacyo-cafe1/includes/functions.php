<?php

function site_url(string $path = ''): string
{
    $base = '/galkacyo-cafe1';

    return $base . '/' . ltrim($path, '/');
}

function asset_url(string $path = ''): string
{
    return site_url('assets/' . ltrim($path, '/'));
}

function page_url(string $page): string
{
    return site_url('index.php?page=' . urlencode($page));
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}