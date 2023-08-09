<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sarthak_sharma8886667"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
