<?php 
session_start();

include ('db.php');

$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
$password = $_POST['ancien'];
$update = $_POST['nouveau'];

if($fonction == 'enseignant'){
	$req1 = "SELECT pswd FROM enseignant WHERE matriculeEns = '$mat';";
	$req2 = $connection->prepare('UPDATE enseignant SET pswd = :passe WHERE matriculeEns = :nom');
	}
	
else{
	$req1 = "SELECT pswd FROM etudiant WHERE matricule = '$mat';";
	$req2 = $connection->prepare('UPDATE etudiant SET pswd = :passe WHERE matricule = :nom');
	}
	
$result = $connection->query($req1);
$aff = $result->fetch();

if(!in_array($password,$aff)){
	?>
	<script> alert('ancien mot de passe non valide'); location = 'update.php?code=password';</script>
	<?php
	}
	
else{ 
	$req2->execute(array(
	'passe' => $update,
	'nom' => $mat
	));
	}

$req1->closeCursor();
$req2->closeCursor();
?>
<script> alert('modification reussie'); location = 'index.php';</script>