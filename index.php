<?php


use Phpstok\Factory;

require __DIR__ . '/vendor/autoload.php';
//php -S localhost:8000


$factory = new Factory();
$audi = $factory->makeAuto('audi');
$audi->blowAirbags();
