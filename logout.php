<?php
session_destroy();
setcookie("user", $row["email"], time()-(86400*3),"/");
header("Location: login.php");
?>