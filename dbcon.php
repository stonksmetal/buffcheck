<?php

$DB_USERNAME = "root";
$DB_HOST = "localhost";
$DB_PW = "";
// Create connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PW, "buffdata");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



 ?>
