<?php
//cette page nous permet de deconnecter un utilisateur.
//pour commencer, on demarre sa session avec session_start()
session_start();
?>
<?php
include('db.php');
?>
<?php
$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
//ensuite, on l'arrête avec session_destroy()
if($fonction == 'enseignant'){
$req = $connection->prepare('UPDATE '.$fonction.' SET connected = :con WHERE matriculeEns = :nom');
$req->execute(array(
'con' => 0,
'nom' => $mat
));

}
else{
$req = $connection->prepare('UPDATE '.$fonction.' SET connected = :con WHERE matricule = :nom');
$req->execute(array(
'con' => 0,
'nom' => $mat
));
}
session_destroy();
$req->closeCursor();
//puis on redirige vers la page d'accueil du site.
header('location: index.php');
?>
