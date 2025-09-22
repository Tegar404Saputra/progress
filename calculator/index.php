<?php
$result = '';

if(isset($_POST['calculate'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    if(is_numeric($number1) && is_numeric($number2)){
        switch($operator){
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number2 != 0 ? $number1 / $number2 : $result = 'ERROR: Pembagian tidak boleh dengan nol';
            break;
    }
    }
} else{
    $result = 'ERROR: Invalid number!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="index.php" method="post">
        <h2>Calculator</h2>

        <div class="input1">
            <label for="">Masukkan angka pertama</label>
            <input name='number1' value="<?= isset($_POST['number1']) ? $_POST['number1'] : '' ?>" type="text">
        </div>
        <div class="input2">
            <label for="">Masukkan angka kedua</label>
            <input name='number2' value="<?= isset($_POST['number2']) ? $_POST['number2'] : '' ?>" type="text">
        </div>

        <div class="select-option">
            <select name="operator" id="operator">
                <option <?= isset($_POST[$operator]) && $_POST[$operator] == '+' ? 'selected' : '' ?> value="+">Tambah(+)</option>
                <option <?= isset($_POST[$operator]) && $_POST[$operator] == '-' ? 'selected' : '' ?> value="-">Kurang(-)</option>
                <option <?= isset($_POST[$operator]) && $_POST[$operator] == '*' ? 'selected' : '' ?> value="*">Kali(x)</option>
                <option <?= isset($_POST[$operator]) && $_POST[$operator] == '/' ? 'selected' : '' ?> value="/">Bagi(/)</option>
            </select>
        </div>

        <button name='calculate' type="submit">Hitung</button>

        <p>Hasil: <?= $result ?> </p>
    </form>
</body>
</html>