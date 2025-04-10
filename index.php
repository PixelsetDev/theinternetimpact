<?php

use processes\Cache;
use processes\Components;

ob_start();

const VER = -1;

require_once __DIR__ . '/processes/cache.php';
require_once __DIR__ . '/processes/components.php';

$currentPage = null;

$c = new Components();
$cc = (new Cache())->cacheControl();

$requestURI = trim($_SERVER['REQUEST_URI'],'/');

if ($requestURI == '') {
    $currentPage = (object) ["slug" => "home", "title" => "The internet impacts us all.", "subtitle" => "Let's do something about it."];
    require_once __DIR__ . '/pages/home.php';
    exit;
}

if ($requestURI == 'topics') {
    $currentPage = (object) ["slug" => "topics", "title" => "All topics", "subtitle" => "A-Z of The Internet Impact"];
    require_once __DIR__ . '/pages/topics.php';
    exit;
}

if ($requestURI == 'load-error') {
    $currentPage = (object) ["slug" => "error", "title" => "Whoops! Something went wrong...", "subtitle" => "Error 500 - Internal Server Error"];
    require_once __DIR__ . '/pages/error/loaderror.php';
    exit;
}

$pages = json_decode(file_get_contents(__DIR__ . '/data/pages.json'));
foreach ($pages->topics as $page) {
    if ($page->slug == $requestURI || in_array($requestURI, $page->aliases)) {
        $currentPage = $page;
        require_once __DIR__ . '/pages/article.php';
        exit;
    }
}

$currentPage = (object) ["slug" => "error", "title" => "Whoops! Something went wrong...", "subtitle" => "Error 404 - Page not Found"];
require_once __DIR__ . '/pages/error/notfound.php';