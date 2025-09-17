<?php

abstract class Hewan{
  abstract public function jenis();
}

class Kucing extends Hewan{
  public function jenis(){
    return "kucing anggora";
  }
}

$kucing = new Kucing();
echo $kucing->jenis()

?>