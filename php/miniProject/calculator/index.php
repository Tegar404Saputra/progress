<?php
$result = '';
if(isset($_POST["calculate"])){
  $number1 = htmlspecialchars($_POST["number1"]);
  $number2 = htmlspecialchars($_POST["number2"]);
  $operator = htmlspecialchars($_POST["operator"]);
  
  if(is_numeric($number1) && is_numeric($number2)){
    switch($operator){
      case "add":
        $result = $number1 + $number2;
        break;
      case "subtract":
        $result = $number1 - $number2;
        break;
      case "multiply":
        $result = $number1 * $number2;
        break;
      case "divide":
        if($number2 != 0) {
        $result = $number1 / $number2;
        } else {
          $result = "ERROR: PEMBAGIAN TIDAK BOLEH DI BAGI NOL";
        }
        break;
    }
  } else {
    $result = " ERROR: ANGKA TIDAK VALID";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Kalkulator Sederhana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">KALKULATOR SEDERHANA</h3>
            <form action="index.php" method="post">
              <div class="mb-3">
                <input type="text" name="number1" id="number1" class="form-control" placeholder="Masukkan angka pertama" value="<?= isset($_POST["number1"]) ? $_POST["number1"] : '' ?>" required>
              </div>
              <div class="mb-3">
                <input type="text" name="number2" id="number2" class="form-control" placeholder="Masukkan angka kedua" value="<?= isset($_POST["number2"]) ? $_POST["number2"] : '' ?>" required>
              </div>
              <div class="mb-3">
                <select name="operator" id="operator" class="form-select" >
                  <option <?= isset($_POST["operator"]) && $_POST["operator"] == "add" ? "selected" : "" ?> value="add">Tambah</option>
                  <option <?= isset($_POST["operator"]) && $_POST["operator"] == "subtract" ? "selected" : "" ?> value="subtract">Kurang</option>
                  <option <?= isset($_POST["operator"]) && $_POST["operator"] == "multiply" ? "selected" : "" ?> value="multiply">Kali</option>
                  <option <?= isset($_POST["operator"]) && $_POST["operator"] == "divide" ? "selected" : "" ?> value="divide">Bagi</option>
                </select>
              </div>
              <div class="d-grid">
                <button type="submit" name="calculate" class="btn btn-primary">Hitung</button>
              </div>
            </form>
            <div class="result mt-4">
              <p class="fs-5">Hasil: <?php echo htmlspecialchars($result) ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>