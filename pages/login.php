<?php session_start(); 
 include('db.php'); 

$mat = $_POST['matricule'];
$pswd = $_POST['passe'];
$verification = false;

$req1 = "SELECT *FROM enseignant;";
$result1 = $connection->query($req1);
$req2 = "SELECT *FROM etudiant;";
$result2 = $connection->query($req2);
while($affiche = $result1->fetch()){
	if($mat == $affiche['matriculeEns'] && $pswd == $affiche['pswd']){
		
		$req = $connection->prepare('UPDATE enseignant SET connected = :con WHERE matriculeEns = :nom');
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		));
		$verification = true;
		$_SESSION['fonction'] = 'enseignant';
		break;
		}
	}


if(!$verification){
while($affiche = $result2->fetch()){
	if($mat == $affiche['matricule'] && $pswd == $affiche['pswd']){
	
		$req = $connection->prepare('UPDATE etudiant SET connected = :con WHERE matricule = :nom');
		$req->execute(array(
		'con' => 1,
		'nom' => $mat
		));
		$verification = true;
		$_SESSION['fonction'] = 'etudiant';
		break;
		}
	}
}

if($verification){
		$_SESSION['name'] = $affiche['nom'];
		$_SESSION['photo'] = $affiche['avatar'];
		$_SESSION['matricule'] = $mat;
		$_SESSION['connect'] = $affiche['connected'];
		header('location: index.php');
		}
if(!$verification)
?>
<script language='javascript'> alert('erreur de login ou de mot de passe'); location = 'index.php';</script>
<?php
	

?>