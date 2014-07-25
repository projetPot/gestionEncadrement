<?php 
session_start();

include('db.php');

$proposeur = $_GET['proposeur'];
$mat = $_SESSION['matricule'];
$fonction = $_SESSION['fonction'];
$id = $_GET['id'];
$domaine = $_GET['domaine'];
if($fonction == 'etudiant'){$sql = $connection->query("INSERT INTO encadre VALUES('$proposeur','$mat','$domaine') ");}
else{$sql = $connection->query("INSERT INTO encadre VALUES('$mat','$proposeur','$domaine') ");}

$sql = $connection->query("DELETE FROM demande WHERE id = '$id' ");

$sql->closeCursor(); 
header('location: mes_demandes.php');

?>