<?php

function salam(){
  echo "hello,there";
}
salam();

echo "<br>";

function penjumlahan($a, $b){
  $hasil = $a + $b;
  echo $hasil;
}
penjumlahan(5,5);

echo "<br>";

function luasPersegi($sisi){
  return $sisi * $sisi;
}
$luas = luasPersegi(4);
echo $luas;

?>