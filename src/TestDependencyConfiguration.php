<?php

namespace Phpstok;

use Phpstok\Safety\Airbag;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$containerBuilder = new ContainerBuilder();

//anonymous class with interface
$mockAirbag = new class implements Airbag {
  public function blow(){
    return 'TEST BOOOM';
	}
};

// $containerBuilder
// 				->register( 'airbag', 'Phpstok\Safety\DefaultAirbag' );

$containerBuilder
				->register( 'airbag', $mockAirbag);

$containerBuilder
				->register( 'audi', 'Phpstok\Car\Audi' )
				->addArgument('400 wheels for tests')
				->addMethodCall('setAirbag',[new Reference('airbag')]);


return $containerBuilder;
