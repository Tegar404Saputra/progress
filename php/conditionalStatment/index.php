<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- CONDITIONAL STATMENT -->
  
  <!-- IF ELSE,ELSE IF -->
  <?php
  
  $nilai = 90;
 
  /*
  if($nilai >= 90) {
    echo "Grade A";
  } else if ($nilai >=75) {
    echo "Grade B";
  } else {
    echo "Grade C";
  }
  */
  
  ?>
  
  <div>
    <?php if($nilai >= 90): ?>
    <h1 style="color: green">Grade A</h1>
    <?php elseif($nilai >=75): ?>
    <h1 style="color: yellow">Grade B</h1>
    <?php else: ?>
    <h1 style="color: red">Grade C</h1>
    <?php endif; ?>
  </div>
  
  
  <!-- SWITCH CASE STATMENT -->
  <?php
  
  $warna = "merah";
  
  switch($warna) {
    case "merah":
      echo "warna merah";
      break;
    case "biru":
      echo "warna biru";
      break;
    default:
      echo "tidak ada warna";
  }
  
  ?>
</body>
</html>