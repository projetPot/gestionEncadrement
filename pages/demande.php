<?php 
session_start();

include('db.php');

$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
$mat1 = $_GET['proposeur'];
$domaine = $_POST['domaine'];

if($fonction == 'enseignant'){
	$objet = 'LE PROFESSEUR M.'.$_SESSION['name'].' SOUHAITE ETRE VOTRE ENCADREUR EN '.$domaine;
	$connection ->query("INSERT INTO demande VALUES ('','$mat','$mat1','$objet','$domaine',NOW(),'')") or die('echec lors de l\'envoie');
	}
else{
	$objet = 'M.'.$_SESSION['name'].' SOUHAITE QUE VOUS SOYEZ SON ENCADREUR EN '.$domaine;
	$connection ->query("INSERT INTO demande VALUES ('','$mat','$mat1','$objet','$domaine',NOW(),'')") or die('echec lors de l\'envoie');
	}
	
	header('location: recherche.php');
?>