<?php 
include('db.php'); 

$id = $_GET['id'];


$connection->query("DELETE FROM demande WHERE id = '$id' ");

header('location: mes_demandes.php');
?>