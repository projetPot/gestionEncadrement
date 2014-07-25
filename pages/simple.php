<?php

session_start();

try
{
$connection = new PDO('mysql:host=localhost;dbname=projetphp','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
//on essai de se connecter à la base de données projetphp préalablement créée.

catch(Exception $e)
{
die('erreur'.$e->getMessage());
//si la connection echoue, on affiche un message d'erreur
}

// $sql="SELECT * FROM etudiants WHERE id = '".$q."'";

$nomA = $_SESSION['name'];
$nomB = $_GET['destinataire'];

$sql = $connection->query("SELECT * FROM messages WHERE (destinataire='$nomA' AND destinateur='$nomB') OR (destinataire='$nomB' AND destinateur='$nomA') ORDER BY date_envoi");

while($result = $sql->fetch()){
  
  echo "<span class='userSend'>" . htmlspecialchars($result['destinataire']) . "</span>";
  echo "<p class='contentSend'>" . htmlspecialchars($result['contenu']) . "</p> <br/> <br/>";

  } 



$sql->closeCursor();
?> 