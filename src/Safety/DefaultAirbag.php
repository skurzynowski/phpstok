<?php

namespace Phpstok\Safety;

class DefaultAirbag implements Airbag {
  public function blow(){
    echo "Booom!";
  }
}
