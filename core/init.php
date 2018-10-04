<?php
include 'database/Connection.php';
include 'class/Users.php';
include 'class/Diarys.php';

//include 'class/utilitis.php';
 global $pdo;

$getFromU  = new Users($pdo);
$getFromD  = new Diarys($pdo);


session_start();

?>