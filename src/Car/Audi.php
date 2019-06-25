<?php

namespace Phpstok\Car;
use Phpstok\Safety\Airbag;

/**
 * Car class
 */
class Audi implements Car {

  //IMPORTANT PRIVATE
  private $pk;
  //IMPORTANT PRIVATE
  private $airbag;

  public function __construct( string $how_many_pk ){
    $this->pk = $how_many_pk;
  }

  public function setAirbag(Airbag $airbag){
     $this->airbag = $airbag;
  }

  public function getPk():string{
    return "PK: " . $this->pk;
  }

  public function blowAirbags():string{
     return $this->airbag->blow();
  }

}
