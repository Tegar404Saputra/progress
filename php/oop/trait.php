<?php

trait Pesan{
  public function sayHello(){
    return "Hello world form trait";
  }
}

class ngomong{
  use Pesan;
}

$omong = new ngomong();
echo $omong->sayHello();

?>