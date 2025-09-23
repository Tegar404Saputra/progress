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
  $a = 5;
  $b = 10;
  $c = 10;
  
  ?>
  <!-- OPERATOR PERBANDINGAN -->
  <p>a = 5</p>
  <p>b = 10</p>
  <p>c = 10</p>
  
  <ul>
    <li>
      OPERATOR == ADALAH: <?= var_dump($a == $b) ?>
    </li>
    <li>
      OPERATOR != ADALAH: <?= var_dump($a != $b) ?>
    </li>
    <li>
      OPERATOR === ADALAH: <?= var_dump($a === $c) ?>
    </li>
    <li>
      OPERATOR !== ADALAH: <?= var_dump($a !== $c) ?>
    </li>
    <li>
      OPERATOR > ADALAH: <?= var_dump($a > $b) ?>
    </li>
    <li>
      OPERATOR < ADALAH: <?= var_dump($a < $b) ?>
    </li>
    <li>
      OPERATOR >= ADALAH: <?= var_dump($a >= $b) ?>
    </li>
    <li>
      OPERATOR <= ADALAH: <?= var_dump($a <= $b) ?>
    </li>
  </ul>
  
</body>
</html>