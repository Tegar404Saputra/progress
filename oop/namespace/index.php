<?php

require_once 'App/init.php';

use App\Produk\Komik;
use App\Produk\Game;
use App\Produk\CetakInfoProduk;

//$produk1 = new Komik("Naruto", "Mashasi kishimoto", "kiyu", 50000, 100, 'komik');
//$produk2 = new Game("Mobile Legend", "haikyu", "eak", 100000, 60,'game');

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );

// echo $cetakProduk->cetak();
echo '<hr>';

use App\Produk\User;
new User();
// new App\Service\User();