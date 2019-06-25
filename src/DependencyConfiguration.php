<?php

namespace Phpstok;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$containerBuilder = new ContainerBuilder();

$containerBuilder
				->register( 'airbag', 'Phpstok\Safety\DefaultAirbag' );

//Register shortcodes
$containerBuilder
				->register( 'audi', 'Phpstok\Car\Audi' )
				->addArgument('4 wheel')
				->addMethodCall('setAirbag',[new Reference('airbag')]);


//Create single object
//Create another variation of object
//Use seter to inject dependency
//Eplain reference
//Create radio component and register it

return $containerBuilder;
