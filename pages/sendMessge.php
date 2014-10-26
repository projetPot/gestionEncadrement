<?php

session_start();

include('db.php');

$nom = $_SESSION['name'];
$desti = $_GET['receiveUser'];
$textToSend = $_GET['textToSend'];


$inscrit = $connection->prepare("INSERT INTO messages  VALUES ('', :destinateur, :destinataire, NOW(), '', :content);");

$inscrit -> execute(array(
'destinateur' => $desti,
'destinataire' => $nom,
'content' =>  $textToSend

));

$inscrit->closeCursor();
?>

