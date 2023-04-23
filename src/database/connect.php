<?php
// $servername = "db";
// $username = "lsi";
// $password = "lsilsilsi";
// $dbname = "lsi_db";

// $servername = "db4free.net";
// $username = "lsi_kintaikanri";
// $password = "lsi_kintaikanri";
// $dbname = "lsi_kintaikanri";

$dbUrl = 'postgres://lsi_kintaikanri:4ET9Ws3M43C3xsr5VREqp0pW6WMJQATM@dpg-ch2fv8l269v61fd6r56g-a.singapore-postgres.render.com/lsi_kintaikanri';
$conn = pg_connect($dbUrl);

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//mysqli_select_db($conn,$dbname);
?> 