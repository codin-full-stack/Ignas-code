<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "ignelis";

$conn = new mysqli($servername, $username, $password, $myDB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
include 'functions.php';
// include('sessionCheck.php');