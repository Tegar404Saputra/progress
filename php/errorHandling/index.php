<?php
// $num = 5;
// echo $number; // Notice Error
// 
// include("fileKosong.php"); // Warning Error
// 
// functionKosong() // Fatal Error


function pembagian($pembilang, $penyebut) {
  if($penyebut == 0) {
    throw new exception("pembagian dengan nol tidak di perbolehkan!");
  }
  return $pembilang / $penyebut;
}

try {
  echo pembagian(10, 0);
}catch (exception $e) {
  echo "Error: ", $e->getMessage();
} finally {
  echo "<br> finally run";
}

?>