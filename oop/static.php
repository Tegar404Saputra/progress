<?php

class ContohStatic{
    public static $angka = 1;

    public static function getAngka(){
        return 'halo' . self::$angka++ . 'kali. <br>';
    }
}

echo ContohStatic::getAngka();
echo ContohStatic::getAngka();
echo ContohStatic::getAngka();
echo '<hr>';

class ContohDua{
    public static $angka = 1;

    public function get(){
        return 'halo' . self::$angka++ . 'kali. <br>';
    }
}

$contoh = new ContohDua();
echo $contoh->get();
echo $contoh->get();
echo $contoh->get();
