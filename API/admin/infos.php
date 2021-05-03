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

  function changeName($newName){
    global $conn;
    $res = $conn->prepare("UPDATE infos SET infoName = :newName");
    $res->execute(array(':newName' => $newName));
    echo $newName;
  }

  function changeDate($newDate, $inOrOut){
    global $conn;
    if($inOrOut == 'start'){
      $line = 'infoDateStart';
    } else{
      $line = 'infoDateEnd';
    }
    $res = $conn->prepare("UPDATE infos SET $line = :newDate");
    $res->execute(array(':newDate' => $newDate));
    echo $newDate;
  }

  function changeDesc($newDesc){
    global $conn;
    $res = $conn->prepare("UPDATE infos SET infoDesc = :newDesc");
    $res->execute(array(':newDesc' => $newDesc));
    echo $newDesc;
  }

  $auth = checkToken($_POST['token']);

  //if the user is allowed to do the request : do action
  if($auth){
    if($type == 'changeName'){
      changeName($_POST['value']);
    }
    if($type == 'changeDate'){
      changeDate($_POST['value'], $_POST['inOrOut']);
    }
    if($type == 'changeDesc'){
      changeDesc($_POST['value']);
    }
  }
?>
