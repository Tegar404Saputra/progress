<?php
class mobil{
  // Properties
  public $warna;
  
  public function mengemudi(){
    echo "mobil sedang mengemudi";
  }
}

$mobilSaya = new mobil();
$mobilSaya->warna = "merah <br>";
echo $mobilSaya->warna;

$mobilSaya->mengemudi();
?>