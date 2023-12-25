<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:/buspass/login.php");
echo "<script>alert('logout successfully')";
?>
