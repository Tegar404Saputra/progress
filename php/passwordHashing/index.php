<?php

$password = "user123";
$hash_password = password_hash($password, PASSWORD_BCRYPT);

if(password_verify($password, $hash_password)){
  echo "Password Is Valid!";
}else{
  echo "Invalid Password!";
}

?>