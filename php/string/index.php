<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>PENGGABUNGAN STRING (CONACTENATION)</h1>
  <?php
  // PENGGABUNGAN STRING
  $namaPertama = "tegar";
  $namaTerakhir = "adi";
  
  $namagabungan = $namaPertama . " " . $namaTerakhir;
  $fullname = "$namaPertama $namaTerakhir";
  
  // PENCARIAN STRING
  $kalimat = "hallo ini adalah string dengan php,ini di buat oleh tegar";
  $posisi = strpos($kalimat,'ini');
  $posrr = strrpos($kalimat,'ini');
  
  $teks = "saya suka belajar php";
  $teksBaru = str_replace("saya", "anda", $teks);
  
  $panjangStr = strlen($teks);
  
  $upperTeks = strtoupper($teks);
  
  $lowerTeks = strtolower($teks);
  
  $subTeks = substr($teks, 0, 17);
  
  ?>
  <!-- PENGGABUNGAN STRING -->
  <h1><?php echo $namagabungan ?></h1>
  
  <h1><?php echo $fullname ?></h1>
  
  
  <!-- PENCARIAN STRING -->
  <h1><?php echo $kalimat ?></h1>
  
  <h1><?php echo $posisi ?></h1>
  
  <h1><?php echo $posrr ?></h1>
  
  
  
  <!-- FUNGSI STRING LAIN -->
  <h1><?php echo $teks ?></h1>
  
  <h1><?php echo $teksBaru ?></h1>
  
  <h1><?php echo $panjangStr ?></h1>
  
  <h1><?php echo $upperTeks ?></h1>
  
  <h1><?php echo $lowerTeks ?></h1>
  
  <h1><?=  $subTeks ?></h1>
  
</body>
</html>