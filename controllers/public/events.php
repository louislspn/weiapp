<?php
$view = "public/events";
$title = "Evenements";
session_start();
include("connection.php");
$res = $conn->prepare("SELECT * FROM events");
$res->execute();
$res->setFetchMode(PDO::FETCH_OBJ);
$events = $res->fetchAll(\PDO::FETCH_ASSOC);
setlocale(LC_TIME, 'fr_FR.utf8','fra');
?>
