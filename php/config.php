<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "panjiyar_edition_messenger";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
