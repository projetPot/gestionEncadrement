<?php 
session_start();

include('db.php');
$nom = $_GET['nom'];
$mat = $_GET['matricule'];
$photo = $_GET['photo'];
$fonction = $_GET['fonction'];
if($fonction == 'enseignant'){
$req1 = "SELECT *FROM enseignant WHERE matriculeEns = '$mat';";
$result1 = $connection->query($req1);
$affiche = $result1->fetch();

		$req = $connection->prepare('UPDATE enseignant SET connected = :con WHERE matriculeEns = :nom');
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		));
		$_SESSION['fonction'] = 'enseignant';
		$_SESSION['matricule'] = $affiche['matriculeEns'];

}
else{
$req1 = "SELECT *FROM etudiant WHERE matricule = '$mat';";
$result1 = $connection->query($req1);
$affiche = $result1->fetch();

		$req = $connection->prepare('UPDATE etudiant SET connected = :con WHERE matricule = :nom');
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		));
		$_SESSION['fonction'] = 'etudiant';
		$_SESSION['matricule'] = $affiche['matricule'];

}
$_SESSION['name'] = $affiche['nom'];
$_SESSION['photo'] = $affiche['avatar'];
$_SESSION['connect'] = 1;
header('location: index.php');
?>