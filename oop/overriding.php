<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga; //property

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        return "{$this->judul}, {$this->getLabel()}, {$this->harga}";
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
$produk2 = new game("Mobile Legend", "haikyu", "eak", 100000, 60,'game');


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



