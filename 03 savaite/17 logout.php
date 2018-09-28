<?php
session_start();
unset($_SESSION["userID"]);
unset($_SESSION["psw"]);
header("Location:login.php");
?>