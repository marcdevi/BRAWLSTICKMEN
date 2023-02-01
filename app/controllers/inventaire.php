<?php 
if(!isConnected()){
    header('location: index.php');
}
$userid = $_SESSION['userid'];


$inventaire = getinventaire($_SESSION['userid'], $db);