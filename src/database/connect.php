<?php
// $servername = "db";
// $username = "lsi";
// $password = "lsilsilsi";
// $dbname = "lsi_db";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// mysqli_select_db($conn,$dbname);

//local
$host = "25263006b898";
$port = "5432";
$dbname = "lsi_kintaikanri";
$user = "lsi";
$password = "lsilsilsi";

//render-server
// $host = "dpg-ch2fv8l269v61fd6r56g-a.singapore-postgres.render.com";
// $port = "5432";
// $dbname = "lsi_kintaikanri";
// $user = "lsi_kintaikanri";
// $password = "4ET9Ws3M43C3xsr5VREqp0pW6WMJQATM";

// Create connection
$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password);

// Check connection
if (!$conn) {
  die("Connection failed: " . pg_last_error());
} else {
  echo "here we go";
}

?> 