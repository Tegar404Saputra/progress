<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Mashasi kishimoto", "kiyu", 50000, 100, 'komik');
$produk2 = new Game("Mobile Legend", "haikyu", "eak", 100000, 60,'game');

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();