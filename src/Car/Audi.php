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
    $this->wheels = $how_many_wheels;
  }

  public function setAirbag(Airbag $airbag){
     $this->airbag = $airbag;
  }

  public function printPk(){
    echo "PK: " . $this->pk;
  }

  public function blowAirbags(){
    $this->airbag->blow();
  }

}
