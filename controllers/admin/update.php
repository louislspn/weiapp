<?php
  session_start();
  include("connection.php");
  session_start();
  if(!isset($_SESSION['connected']) || $_SESSION['connected'] != true){
    header('Location:index.php?c=admin_login');
  }
  $view = "admin/update";
  $resTeam = $conn->query("SELECT * FROM teams");
  $resTeam->setFetchMode(PDO::FETCH_OBJ);
  $resultTeam = $resTeam->fetchAll(\PDO::FETCH_ASSOC);
  foreach($resultTeam as &$team){
    $resChallenge = $conn->query("SELECT * FROM challenges WHERE challengeTeam = '".$team['teamID']."'");
    $resChallenge->setFetchMode(PDO::FETCH_OBJ);
    $resultChallenge = $resChallenge->fetchAll(\PDO::FETCH_ASSOC);
    $team['challenges'] = $resultChallenge;

    $resDone = $conn->prepare("SELECT count(*) as total FROM challenges WHERE challengeDone = :state AND challengeTeam = :team");
    $resDone->execute(array(':state' => 1, ':team' => $team['teamID'] ));
    $resDone->setFetchMode(PDO::FETCH_OBJ);
    $resultDone = $resDone->fetch();
    $team['done'] = $resultDone->total;

    $resNumber = $conn->prepare("SELECT count(*) as total FROM challenges WHERE challengeTeam = :teams");
    $resNumber->execute(array(':teams' => $team['teamID'] ));
    $resNumber->setFetchMode(PDO::FETCH_OBJ);
    $resultNumber = $resNumber->fetch();
    $team['number'] = $resultNumber->total;
  }

?>
