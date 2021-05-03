<?php
  // create the connection to the database
  $conn = new PDO("mysql:host=".HOST.";dbname=".BDD, USER, PASS);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
