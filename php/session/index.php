<?php
session_start();
$_SESSION["user_name"] = "tegar";
$_SESSION["age"] = 17;

if(isset($_SESSION["user_name"])){
  echo $_SESSION["user_name"];
} else {
  echo "session tidak ada";
}

unset($_SESSION["user_name"]);
session_destroy()
?>