<?php

// --- Requirement ---
// php.ini
//    extension=phar.so
//    phar.readonly = On → Off          // or $ php -d phar.readonly=0 1_phar_build.php


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
$phar->buildFromDirectory(dirname(__FILE__) . '/src');
$phar->setDefaultStub('index.php');
// $phar->compress(Phar::GZ);
