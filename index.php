<?php
  declare(strict_types = 1);
  require_once("config.php");
  if(isset($_GET["c"])){
    // $c = Parameter::cleanedString($_GET["c"]); Créer l'objet
    $controller = (in_array($_GET["c"], $controllers))?str_replace("_", "/", $_GET["c"]):"deconnection";
  } else{
    $controller = "public/public";
  }
  require_once(CONTROLLERS."$controller.php");
  ?>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo STYLES ?>main.css?v=2.3">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLES.$controller ?>.css?v=2.3">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="icon" sizes="192x192" href="apple-touch-icon192.png" />
    <title><?php echo $title ?> - WEI APP</title>
    <!-- <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:300,700');
      :root{
        --font:'Montserrat';
        --darkBlue:#30383E;
        --light:#ECECEC;
        --contrast:#FDB44B;
        --lightgreen:#6BC36D;
        --lightblue:#29607A;
      }
      *{
        margin:0;
        padding:0;
        -webkit-tap-highlight-color:rgba(255, 255, 255, 0);
      }
      body{
        background-color:var(--contrast);
        color:white;
        font-family:var(--font);
      }
      h1{
        font-size:40px;
        position:absolute;
        text-align:center;
        top:45vh;
        transform:translateY(-50%);
        width:100vw;
      }
      span{
        color:var(--darkBlue);
        font-size:15px;
      }
      footer{
        background-color:var(--light);
        bottom:0;
        color:grey;
        font-size:13px;
        padding:10px;
        position:absolute;
        text-align:center;
        width:calc(100% - 20px);
      }
    </style> -->
  </head>
  <?php
  require_once(ROOT."templates/template.php");
?>
<!-- <h1>WEIAPP 2019<br /><span>Disponible bientôt !</span></h1>
<footer>WEIAPP weiapp.llespinasse.com | <b>Louis Lespinasse</b></footer> -->
