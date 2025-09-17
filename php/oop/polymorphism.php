<?php

class Hewan{
  public function suara(){
    return "hewan bersuara";
  }
}

class Kucing extends Hewan{
  public function suara(){
    return "<br> miawww";
  }
}

$hewanLu = new Hewan();
echo $hewanLu->suara();

$kucingGw = new Kucing();
echo $kucingGw->suara();

?>