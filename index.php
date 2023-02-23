<?php

require __DIR__ . '/vendor/autoload.php';

use JoshuaWebDev\LaravelMundi;

$mundi = new LaravelMundi;

echo $mundi->helloWorld() . "\n";