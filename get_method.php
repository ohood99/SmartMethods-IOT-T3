<?php

$data = $_GET["value"];
//echo $data;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssen10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO val (val_sen)
VALUES ('$data')";

if ($conn->query($sql) === TRUE) {
  echo "successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>