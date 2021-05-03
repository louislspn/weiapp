<?php
  declare(strict_types = 1);
  define("WEBROOT", str_replace("index2.php", "", $_SERVER["SCRIPT_NAME"]));
  define("ROOT", str_replace("index2.php", "", $_SERVER["SCRIPT_FILENAME"]));
  require_once("config.php");
  if(isset($_GET["c"])){
    // $c = Parameter::cleanedString($_GET["c"]); Créer l'objet
    $controller = (in_array($_GET["c"], $controllers))?str_replace("_", "/", $_GET["c"]):"deconnection";
    require_once(CONTROLLERS."$controller.php");
  } else{
      header("Location:index.php");
  }
  require_once(ROOT."templates/template2.php");
?>
