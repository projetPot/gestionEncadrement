<?php 
session_start();
include('db.php');

$mat = $_SESSION['matricule'];
$nom = $_POST['nom'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$objet = $_POST['objet'];
$date = '2014-'.$mois.'-'.$jour;

$req1 = "SELECT matricule FROM etudiant WHERE nom = '$nom'";
$req2 = "SELECT matricule FROM encadre WHERE matriculeEns = '$mat'";

$list_nom = $connection->query($req1);
$list_matri = $connection->query($req2);

// $result2 = $list_matri->fetch();

while($result1 = $list_nom->fetch()){
	while($result2 = $list_matri->fetch()){
	if($result1['matricule'] == $result2['matricule']){
		$trouv = $result1['matricule'];
		echo $trouv;
		}
	}
	}

$req3 = "INSERT INTO rendez_vous VALUES('$mat','$trouv',NOW(),'$date','$objet','')";

$rdv = $connection->query($req3);

header('location: rendez_vous.php');


?>