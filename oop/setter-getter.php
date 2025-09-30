<?php

class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $diskon,
            $harga; //property

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->judul;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        return "{$this->judul}, {$this->getLabel()}, Rp.{$this->harga}";
    }
}

class Komik extends Produk {
    public $halaman;

    public function __consturct( $judul, $penulis, $penerbit, $harga, $halaman ){
        parent::__construct();
        $this->halaman = $halaman;
    }

    public function getInfoProduk(){
        $str = "Komik :" . parent::getInfoProduk() . " - {$this->halaman} halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __consturct( $judul, $penulis, $penerbit, $harga, $waktuMain ){
        parent::__construct();
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game :" . parent::getInfoProduk() . " - {$this->waktuMain} menit";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Mashasi kishimoto", "kiyu", 50000, 100, 'komik');
$produk2 = new Game("Mobile Legend", "haikyu", "eak", 100000, 60,'game');


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo '<hr>';

$produk1->setDiskon(50);
echo $produk1->getHarga(20);
echo "<hr>";

echo $produk1->getJUdul();


