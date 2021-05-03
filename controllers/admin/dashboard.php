<?php
  $view = "admin/dashboard";
  $title = "Dashboard";
  session_start();
  if(!isset($_SESSION['connected']) || $_SESSION['connected'] != true){
    header('Location:index.php?c=admin_login');
  }
?>
