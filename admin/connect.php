<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "ltmt2";
$conn = mysqli_connect($server, $user, $pass, $database);
mysqli_query($conn, 'set names "utf8"');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
