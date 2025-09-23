<?php

class Buah {
    public $warna;
    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }
}