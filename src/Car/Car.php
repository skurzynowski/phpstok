<?php

namespace Phpstok\Car;

/**
 * Airbag interface
 */
interface Car {
  public function getPk():string;
  public function blowAirbags():string;
}
