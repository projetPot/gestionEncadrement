<?php
include ('db.php');

$mat = $_GET['matricule'];
$fonction = $_GET['fonction'];
$photo = $_GET['photo'];
$nom = $_SESSION['name'];
session_destroy();

if($fonction == 'enseignant'){
$req2 = $connection->prepare("UPDATE enseignant SET avatar = :passe WHERE matriculeEns = :nom");
}
else{
$req2 = $connection->prepare("UPDATE etudiant SET avatar = :passe WHERE matricule = :nom");
}

$req2->execute(array(
'passe' => $photo,
'nom' => $mat,
)) or die('impossible');

if($req2){

?>
<script> alert('modification reussie');</script>
<?php
$req2->closeCursor();
header("location: special_connect.php?nom=$nom&photo=$photo&matricule=$mat&con='1'&fonction=$fonction");
}
?>