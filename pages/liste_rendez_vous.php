<?php 
session_start();

include('db.php');


?>

<! DOCTYPE html>
<html>
	<head>
		<title> consultez vos rendez_vous </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style/index.css" />
		<link rel="stylesheet" href="../style/instant.css" />
	</head>
	<body>
	<?php include('header.php'); ?>
		<div style=' width: 50%; margin: auto;' >
				<div class="leg" style=" width: 100%; heigth: 10px; text-align: center"> MES RENDEZ-VOUS </div>
				<div style=' height: 400px; overflow: auto; border: 2px groove blue; padding: 5px; text-align: justify;'>
				<?php
				$mat = $_SESSION['matricule'];

$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matricule = '$mat' ORDER BY dateprise DESC");

				
				if($rdv == '0'){
					echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
					}
				else{
				while($aff = $rdv->fetch()){
				$date1 = $aff['dateprise'];
				$date2 = $aff['daterel'];
				$objet = $aff['objet'];
				
					echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ENCADREUR LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
					
					}
					}
			?>
				</div> 
			</div>
	</body>
</html>

<?php
$connection->query("UPDATE rendez_vous SET vue = '1' WHERE matricule = '$mat'");
?>