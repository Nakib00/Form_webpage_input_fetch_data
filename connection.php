<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'from_cse309';

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>