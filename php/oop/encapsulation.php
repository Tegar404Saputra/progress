<?php
class produk {
  public $nama;
  protected $harga;
  private $stok;
  
  public function setStok($stok){
    $this->stok = $stok;
  }
  
  public function getStok(){
    return $this->stok;
  }
  
}

$produkSaya = new produk();
$produkSaya->nama = "laptop";
echo $produkSaya->nama;

$produkSaya->setStok(100);
echo $produkSaya->getStok();
?>