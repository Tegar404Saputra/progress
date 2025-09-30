

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  $nama = "user"; // string
  $umur = 17; // number
  $tinggi = 1.65; // float / double
  $siswa = true; // boolean
  $null = null; // null
  $arr = ['a','b',1,true]; // array
?>

  <h1><?php echo gettype($nama) ?></h1>
  <h1><?php var_dump($umur) ?></h1>
  <h1><?=  is_bool($siswa) ?></h1>
  <h1><?=  var_dump($arr) ?></h1>

</body>
</html>