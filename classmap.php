<?php
$classMap = include __DIR__ . '/vendor/composer/autoload_classmap.php';

foreach ($classMap as $class => $path) {
    echo $class . " → " . $path . PHP_EOL;
}
