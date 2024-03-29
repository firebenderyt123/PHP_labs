<?php

const ROOT_DIR = __DIR__;

function autoloader($class): void
{
    $file = __DIR__ . '/src/classes/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        include_once $file;
    }
}

spl_autoload_register('autoloader');
