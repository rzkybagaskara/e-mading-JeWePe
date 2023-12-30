<?php
$servername = "localhost";
$db_username= "root";
$db_password = "";
$my_db = "e-mading";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $my_db);

// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>