<?php
session_start();
include('db.php');

$nomA = $_SESSION['name'];
$nomB = $_GET['destinataire'];

$sql = $connection->query("SELECT * FROM messages WHERE (destinataire='$nomA' AND destinateur='$nomB') OR (destinataire='$nomB' AND destinateur='$nomA') ORDER BY date_envoi");

while($result = $sql->fetch()){
  
	echo "<span class='userSend'>" . htmlspecialchars($result['destinataire']) . "</span>";
	echo "<p class='contentSend'>" . htmlspecialchars($result['contenu']) . "</p> <br/> <br/>";

	} 

$sql->closeCursor();
?> 