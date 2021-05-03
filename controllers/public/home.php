<?php
  $view = "public/home";
  $title = "Accueil";
  session_start();
  include("connection.php");
  $res = $conn->prepare("SELECT * FROM infos");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $result = $res->fetchAll();

  $res = $conn->query("SELECT  * FROM events WHERE eventTime > " . (time() - 3600). " ORDER BY eventTime ASC LIMIT 1");
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $next_event = $res->fetch();
?>
