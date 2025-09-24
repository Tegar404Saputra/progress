<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $halaman, $waktuMain, $tipe; //property

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktuMain, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    public function infoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if ($this->tipe == 'komik'){
            $str .= " - {$this->halaman} halaman";
        } else if($this->tipe == 'game') {
            $str .= " - {$this->waktuMain} menit";
        }
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Mashasi kishimoto", "kiyu", 50000, 100, 0, 'komik');
$produk2 = new Produk("Mobile Legend", "haikyu", "eak", 100000, 0, 60,'game');


echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();



