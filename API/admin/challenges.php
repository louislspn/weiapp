<?php
  include("../../config.php");
  include("../../connection.php");

  $type = $_POST['action']; 

  // check if user is allowed to do AJAX request
  function checkToken($token){
    global $conn;
    $res = $conn->prepare("SELECT count(*) as total FROM admin WHERE adminTk = :token");
    $res->execute(array(':token' => $token));
    $res->setFetchMode(PDO::FETCH_OBJ);
    $result = $res->fetch();
    if($result->total == 1){
      return true;
    }
    return false;
  }

  // change the challenge state (done or not) and update the number of point
  function challengeState($id){
    global $conn;
    $res = $conn->prepare("SELECT * FROM challenges WHERE challengeID = :id");
    $res->execute(array(':id' => $id));
    $res->setFetchMode(PDO::FETCH_OBJ);
    $challenge = $res->fetch();

    $res = $conn->prepare("UPDATE challenges SET challengeDone = :state WHERE challengeID = :id");
    $res->execute(array(':state' => !$challenge->challengeDone, ':id' => $id));

    $res = $conn->prepare("SELECT * FROM teams WHERE teamID = :id");
    $res->execute(array(':id' => $challenge->challengeTeam));
    $res->setFetchMode(PDO::FETCH_OBJ);
    $team = $res->fetch();
    // increment or decrement number of point
    if(!$challenge->challengeDone){
      $newPoints = $team->teamPoint + $challenge->challengePoint;
    } else {
      $newPoints = $team->teamPoint - $challenge->challengePoint;
    }

    $res = $conn->prepare("UPDATE teams SET teamPoint = :newPoints WHERE teamID = :id");
    $res->execute(array(':newPoints' => $newPoints, ':id' => $team->teamID));
  }

  $auth = checkToken($_POST['token']);

  //if the user is allowed to do the request : do action
  if($auth){
    if($type == 'challengeState'){
      challengeState($_POST['id']);
    }
  } else {
    echo 'error';
  }
?>
