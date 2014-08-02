<?php 
include('db.php'); 

$id = $_GET['id'];

$req = $connection->query("DELETE FROM demande WHERE id = '$id' ");
$req->closeCursor();
header('location: mes_demandes.php');
?>