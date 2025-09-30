<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Handling PHP</title>
</head>
<body>
  <h1>LOGIN</h1>
  <form action="index.php" method="post">
  <div>
    <label for="">Nama: </label>
    <input type="text" name="name" id="name">
  </div>
  
  <div>
    <label for="">Email: </label>
    <input type="email" name="email" id="email">
  </div>
  <button type="submit">Kirim</button>
  </form>
</body>
</html>

<?php
// VALIDASI 
if(empty($_POST["name"])){
  echo "masukkan nama yang valid" . "<br>";
} else {
  echo htmlspecialchars($_POST["name"]) . "<br>"; // XSS
}
// VALIDASI EMAIL SEDERHANA
if(empty($_POST["email"])){
  echo "masukkan email yang valid";
} elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
  echo "email tidak valid";
} else {
  echo htmlspecialchars($_POST["email"]); // XSS
}

?>