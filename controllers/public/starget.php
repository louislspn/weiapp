<?php
  $view = "public/starget";
  $title = "Fiché S";
  session_start();
  include("connection.php");
  $res = $conn->prepare("SELECT * FROM starget ORDER BY scale DESC");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_OBJ);
  $starget = $res->fetchAll(\PDO::FETCH_ASSOC);
?>
