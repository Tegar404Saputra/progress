<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $halaman, $waktuMain; //property

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktuMain){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk {
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->halaman}";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktuMain}";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Mashasi kishimoto", "kiyu", 50000, 100, 0, 'komik');
$produk2 = new game("Mobile Legend", "haikyu", "eak", 100000, 0, 60,'game');


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



