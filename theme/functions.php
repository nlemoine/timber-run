<?php

$composer_autoload = __DIR__  . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
    Timber\Timber::init();
}
