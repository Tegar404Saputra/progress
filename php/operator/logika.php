<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>OPERATOR PERBANDINGAN</h1>
  <?php
  // OPERATOR PERBANDINGAN
  $a = true;
  $b = false;
  
  ?>
  <!-- OPERATOR PERBANDINGAN -->
  <p>a = true</p>
  <p>b = false</p>
  
  <ul>
    <li> $a && $b = <?= var_dump($a && $b) ?> </li>
    <li> $a || $b = <?= var_dump($a || $b) ?> </li>
    <li> ! $a = <?= var_dump(! $a) ?> </li>
    <li> $a xor $b = <?= var_dump($a xor $b) ?> </li>
  </ul>
  
</body>
</html>