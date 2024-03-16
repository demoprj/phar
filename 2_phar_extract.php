<?php

// --- Requirement ---
// php.ini
//    extension=phar.so
//    phar.readonly = On → Off          // or $ php -d phar.readonly=0 2_phar_extract.php


// --- Check ---
if (!extension_loaded('phar')) {
    echo 'phar.so not exist ...' . PHP_EOL;
    exit();
}
if (ini_get('phar.readonly') != 0) {
    echo 'phar.readonly neet to be 0 ...' . PHP_EOL;
    exit();
}


// --- Create ---
$phar = new Phar(dirname(__FILE__) . '/build/test.phar');
$phar->extractTo(dirname(__FILE__) . '/extract');
