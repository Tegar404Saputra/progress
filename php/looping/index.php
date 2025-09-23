<?php
 // 1.WHILE LOOP
echo "while loop: <br>";
$i = 1;
while ($i <= 5) {
  echo "nomor: $i <br>";
  $i++;
}

echo "<br>";

echo "do while loop: <br>";
// 2.DO WHILE LOOP
$j = 1;
do {
  echo "nomor: $j <br>";
  $j++;
} while ($j <=5);

echo "<br>";

echo "for loop: <br>";
// 3. FOR LOOP
for($k = 1; $k <= 5; $k++){
  echo "nomor: $k <br>";
}

echo "<br> break: <br>";
// 4. BREAK
for($k = 1; $k <= 10; $k++){
  if($k == 5){
    break;
  }
  echo "nomor: $k <br>";
}

echo "<br> continue: <br>";
// 4. BREAK
for($k = 1; $k <= 10; $k++){
  if($k == 5){
    continue;
  }
  echo "nomor: $k <br>";
}

echo "<br> foreach: <br>";
// 5. FOREACH
$arr = ["apel","pisang","mangga"];
foreach ($arr as $buah) {
  echo "Buah: $buah <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>ALTERNATIF CODE</h2>
  
  <ul>
    <?php foreach ($arr as $buah): ?>
    <li style="color: green">Buah: <?= $buah ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>