<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "2106038_fahril";

// Create connection
$db = new mysqli($servername, $username, $password,$database);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>