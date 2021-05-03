<?php
  $view = "public/leaderboard";
  $title = "Classement";
  session_start();
  include("connection.php");
  $res = $conn->prepare("SELECT * FROM teams ORDER BY teamPoint DESC");
  $res->execute();
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $result = $res->fetchAll();
?>
