<?php

class orang{
  public $nama;
  
  public function __construct($nama){
    $this->nama = $nama;
    echo "ini constructor";
  }
  
  public function __destruct(){
    echo "<br> run setelah skrip selesai / objek di hapus";
  }
}

$namaSaya = new orang("<br> tegar");
echo $namaSaya->nama;


?>