<?php

require_once('phar://build/test.phar');

$class1 = new TestClass1();
$class2 = new TestClass2();

echo $class1->getClassName() . PHP_EOL;
echo $class2->getClassName() . PHP_EOL;
