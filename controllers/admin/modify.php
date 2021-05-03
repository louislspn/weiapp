<?php
  session_start();
  include("connection.php");
  $view = "admin/modify";

  $res = $conn->prepare("SELECT * FROM infos");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_OBJ);
  $result = $res->fetch();
  $dateStart = date("d-m-Y", strtotime($result->infoDateStart));
?>
