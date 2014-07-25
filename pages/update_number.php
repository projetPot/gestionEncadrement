<?php 
session_start();

include ('db.php');

$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
$number = $_POST['ancien'];
$update = $_POST['nouveau'];

if($fonction == 'enseignant'){
$req1 = "SELECT adresse FROM enseignant WHERE matriculeEns = '$mat';";
$req2 = $connection->prepare('UPDATE enseignant SET adresse = :passe WHERE matriculeEns = :nom');
}
else{
$req1 = "SELECT numeroTel FROM etudiant WHERE matricule = '$mat';";
$req2 = $connection->prepare('UPDATE etudiant SET numeroTel = :passe WHERE matricule = :nom');
}
$result = $connection->query($req1);
$aff = $result->fetch();

if(!in_array($number,$aff)){
?>
<script> alert('ancien numero non valide'); location = 'update.php?code=numero';</script>
<?php
}
else{ 
$req2->execute(array(
'passe' => $update,
'nom' => $mat
));
}
?>
<script> alert('modification reussie'); location = 'index.php';</script>