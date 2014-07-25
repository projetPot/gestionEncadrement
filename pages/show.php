<?php 
session_start();
 include('db.php'); 

$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
		
if($fonction == 'etudiant'){	
$req = $connection->prepare("UPDATE $fonction SET connected = :con WHERE matricule = :nom");
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		)) or die ('erreur');
}
else{
$req = $connection->prepare("UPDATE $fonction SET connected = :con WHERE matriculeEns = :nom");
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		)) or die ('erreur');
		}
$_SESSION['connect'] = 1;
header('location: index.php');
?>