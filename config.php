<?php
  error_reporting(E_ALL & ~E_NOTICE);
  // define constant to connect db
  define("HOST", "localhost");
  define("USER", "root");
  define("PASS","root");
  define("BDD", "weiapp");
  define("WEBROOT", str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
  define("ROOT", str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
  define("STYLES", WEBROOT."styles/" );
  define("INCLUDES", ROOT."includes/");
  define("CONTROLLERS", ROOT."controllers/");
  define("VIEWS", ROOT."views/");
  define("SCRIPTS", WEBROOT."scripts/");

  $controllers = array(
    "admin_login",
    "admin_dashboard",
    "admin_update",
    "admin_modify",
    "admin_sumup",
    "public_public",
    "public_home",
    "public_events",
    "public_choose",
    "public_leaderboard",
    "public_managers",
    "public_starget",
  );
?>
