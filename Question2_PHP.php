<?php
$dbTestText = "test";

$conn = new mysqli($dbTestText);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>