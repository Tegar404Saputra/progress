<?php

interface Kendaraan{
  public function bergerak();
  public function berhenti();
}

class Mobil implements Kendaraan{
  public function bergerak(){
    return "mobil bergerak... <br>";
  }
  public function berhenti(){
    return "mobil berhenti... <br>";
  }
}

$bmw = new Mobil();
echo $bmw->berhenti();

?>