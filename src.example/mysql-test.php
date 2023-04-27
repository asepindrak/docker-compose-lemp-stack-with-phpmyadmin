<?php
$db_host = 'mysql';
$db_user = 'root';
$db_pass = 'root';
$database = 'demo';
$db = mysqli_connect($db_host,$db_user,$db_pass,$database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}    

print("<br />Successfully connected to database:<strong> ".$database."</strong><br />");
print("Using host:<strong> ".$db_host."</strong><br />");
print("As the user:<strong> ".$db_user."</strong><br />");