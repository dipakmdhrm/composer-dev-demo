<?php
namespace ComposerDemo;

require_once "vendor/autoload.php";

use Rivsen\Demo\Hello;
use Kint\Kint;

// Use rivsen/hello-world to print Hello.
$hello = new Hello('Dipak');
echo $hello->hello() . PHP_EOL;

Kint::dump($hello);
