<?php
$servername = "sql305.epizy.com";
$username = "epiz_34064353";
$password = "yKD7kaNqthj";
$dbname = "epiz_34064353_lsi_kintaikanri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,$dbname);
?> 