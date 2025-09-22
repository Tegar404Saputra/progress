<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $db = "myshoptest";

    $conn = new mysqli($serverName, $username, $password, $db); 

    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM clients WHERE id = $id";
    $conn->query($sql);

    header('Location: /myshoptest/index.php');
    exit();
}
?>