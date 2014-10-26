<?php
session_start();
include('db.php'); 
?>
<?php
$fonction = $_SESSION['fonction'];	

$sql = $connection->query("SELECT * FROM enseignant WHERE connected=1 ");
echo '<p style =\'background-color: blue; color: white; text-align: left; \'> <b> <img src="../images/list-user.png" id="listUser" /> Enseignants connectés :</b> </p> ';
while($result = $sql->fetch()){
  
	echo '<div style=\'margin-top: 20px;\'> <img style=\'width: 50px; heigth: 50px; \' src = \'../avatar/'.$result['avatar'].'\'\/ > <span onclick=\' userConnect(this);\' style=\'font-weight: bold; font-size: 14px; cursor: pointer; \' id=\'connect\'>' . $result['nom'] . '</span> <div>';

	}

$sql = $connection->query("SELECT * FROM etudiant WHERE connected=1");
echo '<p style =\'background-color: blue; color: white; text-align: left;\' > <b> <img src="../images/list-user.png" id="listUser" /> Etudiants connectés :</b> </p> ';  

while($result = $sql->fetch()){
  
	echo '<div style=\'margin-top: 20px; \'> <img  style=\'width: 50px; heigth: 50px; \' src = \'../avatar/'.$result['avatar'].'\'\/ > <span onclick=\' userConnect(this);\' style=\'font-weight: bold; font-size: 14px; cursor: pointer;\' id=\'connect\'>' . $result['nom'] . '</span> <div>';

	}
  
$sql->closeCursor();
?> 