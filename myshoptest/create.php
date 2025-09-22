<?php
$serverName = "localhost";
$username = "root";
$password = "";
$db = "myshoptest";

$conn = new mysqli($serverName, $username, $password, $db); 

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

$name = "";
$phone = "";
$email = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    do {
        if(empty($name) || empty($phone) || empty($email) || empty($address)){
            $errorMessage = "All the fields are riquired";
            break;
        }

        $sql = "INSERT INTO clients (name, phone, email, address)" . "VALUES ('$name', '$phone', '$email', '$address')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = 'Invalid query: ' . $conn->error;
            break;
        }

        $name = "";
        $phone = "";
        $email = "";
        $address = "";

        $successMessage = "Client added correctly";
        
        header('location: /myshoptest/index.php');
        exit();

    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                    <div class='alert alert-warning alert-dismissible fade-show' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' area-label='Close'></button>
                    </div>
                ";
            }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Name</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="name" value="<?= $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Phone</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="phone" value="<?= $phone ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Email</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="email" value="<?= $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Address</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="address" value="<?= $address ?>">
                </div>
            </div>

            <?php
                if(!empty($successMessage)){
                echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-3 d-grid'>
                            <div class='alert alert-success alert-dismisible fade-show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                ";
            }
            ?>


            <div class='row mb-3'>
                <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/myshoptest/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>