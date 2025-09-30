<?php

class Komik extends Produk implements InfoProduk {
    public $halaman;

    public function __consturct( $judul, $penulis, $penerbit, $harga, $halaman ){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function getInfo(){
        $str = "{$this->judul}, {$this->getLabel()}, Rp.{$this->harga}";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game :" . $this->getInfo() . " - {$this->waktuMain} menit";
        return $str;
    }
}