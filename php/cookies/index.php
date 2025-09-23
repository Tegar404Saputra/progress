<?php
setcookie("user_id", "eosjh91jsi109", time() + (86400 * 30), "/");

if(isset($_COOKIE["user_id"])){
  echo $_COOKIE["user_id"];
} else {
  echo "cookie tidak di temukan";
}

setcookie("user_id", "", time() - (86400 * 30), "/");
?>