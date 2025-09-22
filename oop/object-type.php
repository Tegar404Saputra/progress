<?php

class Produk {
    public $judul, $penulis, $penerbit; //property

    public function __construct($judul,$penulis, $penerbit){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getLabel(){ //method
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetakInfo( Produk $produk ){
        return $str = "{$produk->judul} | {$produk->getLabel()}";
    }
}

$produk1 = new Produk("Naruto", "Mashasi kishimoto", "kiyu");

$infoProduk = new CetakInfoProduk();
$infoProduk->cetakInfo($produk1);


echo $infoProduk->cetakInfo($produk1);