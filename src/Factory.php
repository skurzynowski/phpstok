<?php


namespace Phpstok;

use Phpstok\Car\Car;

use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Factory to get correct service
 */
class Factory {

	public function __construct() {
		$container       = include( __DIR__ . '/DependencyConfiguration.php' );
		$this->container = $container;
	}

	public function makeAuto( string $type ) : Car {
		switch ( $type ) {
			default:
				return $this->container->get( 'audi' );
				break;
		}
	}
}
