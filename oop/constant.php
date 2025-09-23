<?php

// class Coba {
//     const NAMA = 'tegar adi saputra';
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba();
echo $obj->kelas;