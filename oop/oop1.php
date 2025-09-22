<?php
class Produk {
    public $judul, $penulis, $penerbit; //property

    public function getLabel(){ //method
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = 'hello world';
$produk1->penulis = 'xxx';
$produk1->penerbit = 'yyy';

echo $produk1->getLabel();