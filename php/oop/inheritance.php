<?php
class hewan{
  public $nama;
  
  public function setNama($nama){
    $this->nama = $nama;
  }
  public function getNama(){
    return $this->nama;
  }
}

class anjing extends hewan{
  public function suara(){
    echo "gug gug";
  }
}
$anjingElu = new anjing();
$anjingElu->setNama('kucenggg <br>');
echo $anjingElu->getNama();
$anjingElu->suara();
?>