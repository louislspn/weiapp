<?php
  include("../../config.php");
  include("../../connection.php");
  $teamID = $_POST['teamID'] + 1;
  $res = $conn->prepare("SELECT * FROM teams WHERE teamID = :id");
  $res->execute(array(':id' => $teamID));
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $teamInfos = $res->fetch();
  echo json_encode($teamInfos);
?>
