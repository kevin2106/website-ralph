<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ralphouse.com";

$value = $_GET['i'];

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn, "ralphouse.com");
?>