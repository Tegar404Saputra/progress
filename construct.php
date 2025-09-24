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

$produk1 = new Produk("Naruto", "Mashasi kishimoto", "kiyu");


echo $produk1->getLabel();