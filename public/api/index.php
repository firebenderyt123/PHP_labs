<?php
header('Content-Type: application/json');

$url = __DIR__ . "/.." . $_SERVER['REQUEST_URI'];
if (pathinfo($url, PATHINFO_EXTENSION) !== 'php') {
    $url .= '.php';
}

require_once $url;