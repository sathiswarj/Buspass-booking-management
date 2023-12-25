<?php
session_start();
unset($_SESSION["user_gmail"]);
unset($_SESSION["user_password"]);
header("Location:/buspass/login.php");
echo "<script>alert('logout successfully')";
?>
