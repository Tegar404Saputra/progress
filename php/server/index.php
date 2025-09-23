<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SERVER</title>
</head>
<body>
  
  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="">nama: </label>
    <input type="text" name="name" id="name">
  </form>
</body>
</html>

<?php
// foreach ($_SERVER as $key => $item) {
//   echo "<br> $key : $item";
// }

if($_SERVER["REQUEST_METHOD"] == 'POST'){
  echo $_POST["name"];
} else {
  echo "bukan request method post";
}
?>