<?php

session_start();

try
{
$connection = new PDO('mysql:host=localhost;dbname=projetphp','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
//on essai de se connecter à la base de données laplage préalablement créée.

catch(Exception $e)
{
die('erreur'.$e->getMessage());
//si la connection echoue, on affiche un message d'erreur
}

$nom = $_SESSION['name'];
$desti = $_GET['receiveUser'];
$textToSend = $_GET['textToSend'];


$inscrit = $connection->prepare("INSERT INTO messages  VALUES ('', :destinateur, :destinataire, NOW(), '', :content);");

$inscrit -> execute(array(
'destinateur' => $desti,
'destinataire' => $nom,
'content' =>  $textToSend

// 'contenu' => $console
));

?>

