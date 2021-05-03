<?php
  $view = "public/choose";
  $title = "Défis";
  session_start();
  include("connection.php");
  $res = $conn->prepare("SELECT * FROM teams");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_OBJ);
  $result = $res->fetchAll(\PDO::FETCH_ASSOC);
?>
