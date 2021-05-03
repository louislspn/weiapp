<?php
  include("../../config.php");
  include("../../connection.php");
  $teamID = $_POST['teamID'] + 1;
  $res = $conn->prepare("SELECT * FROM challenges WHERE challengeTeam = :id ORDER BY uniqueChallenge DESC, challengeDone ASC, challengePoint DESC");
  $res->execute(array(':id' => $teamID));
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $teamChallenge = $res->fetchAll();
  echo json_encode($teamChallenge);
?>
