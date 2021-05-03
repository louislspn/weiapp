<?php
  $view = "public/managers";
  $title = "Intégrants";
  session_start();
  include("connection.php");
  $res = $conn->prepare("SELECT * FROM managers");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_OBJ);
  $result = $res->fetchAll(\PDO::FETCH_ASSOC);

  $res2 = $conn->prepare("SELECT * FROM sponsors");
  $res2->execute();
  $res2->setFetchMode(PDO::FETCH_OBJ);
  $sponsors = $res2->fetchAll(\PDO::FETCH_ASSOC);
?>
