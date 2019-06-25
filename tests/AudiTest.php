<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AudiTest extends TestCase
{
    public function setUp() : void
    {
      $this->container = include( __DIR__ . '/../src/TestDependencyConfiguration.php' );
      $this->test_obj = $this->container->get('audi');
    }

    public function testgetPk() : void
    {
        $this->assertEquals(
            $this->test_obj->getPk(),
            "PK: 400 wheels for tests"
        );
    }

    //Do we need to check if there is a method?
    public function testBlow() : void
    {
        $this->assertEquals(
            $this->test_obj->blowAirbags(),
            "TEST BOOOM"
        );
    }
}
