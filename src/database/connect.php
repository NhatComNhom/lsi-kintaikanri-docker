<?php
$servername = "db4free.net";
$username = "lsi_kintaikanri";
$password = "lsi_kintaikanri";
$dbname = "lsi_kintaikanri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,$dbname);
?> 