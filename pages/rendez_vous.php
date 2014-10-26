<?php 
session_start();
include('db.php');
$mat = $_SESSION['matricule'];
$fonction = $_SESSION['fonction'];
if($fonction == 'enseignant'){
	$req = "select etudiant.nom from etudiant,encadre where etudiant.matricule = encadre.matricule and encadre.matriculeEns = '$mat'";
	}
else{
	$req = "select enseignant.nom from enseignant,encadre where enseignant.matriculeEns = encadre.matricule and encadre.matricule = '$mat'";
	}
$result = $connection->query($req);

?>
<! DOCTYPE html >
<html>
	<head>
		<title> prennez un rendez-vous </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href='../style/index.css' />
		<link rel="stylesheet" href='../style/instant.css' />
	</head>
	<body>
		<?php include('header.php'); ?>
		<br /> <br />
		<center>
			<div id="rdv" >
				<div id="head_rdv"> FIXEZ DES RENDEZ-VOUS </div>
				<form method='post' action='envoi_rdv.php' >
					<label for="liste" class="rdv" > prendre un rendez-vous avec </label><br />
					<select style="width: 100px;" name="nom" id="list" class="list" >
						<?php
							while($liste = $result->fetch()){
								echo "<option>".$liste['nom']."</option>";
								}
							$result->closeCursor();
						?>
					</select><br /> <br />
				
					<label for="jour" class="rdv" > jour </label>
				
					<select name="jour" class="list" >
						<option> jour </option>
						<?php
							for($i=1; $i<=31; $i++){
								echo '<option>'.$i.'</option>';
								}
						?>
					</select>
				
					<label for="mois" class="rdv" > mois </label>
				
					<select name="mois"  class="list">
						<option> mois </option>
						<?php
							for($i=1; $i<=12; $i++){
								echo '<option>'.$i.'</option>';
								}
						?>
					</select><br /> <br />
				
					<label for="objet" class="rdv" > objet </label><br />
				
					<textarea placeholder="objet du rendez-vous" name="objet" class="list" style=" max-height: 120px; min-height: 120px; min-width: 250px; max-width: 250px;"> </textarea><br /> <br />
				
					<input type="submit" class="submit" value="OK" />
				</form>
			</div>
		</center>
		<br /><br />
		
		<div style=' width: 50%; margin: auto;' >
			<div class="leg" style=" width: 100%; heigth: 10px; text-align: center"> MES RENDEZ-VOUS </div>
			<div style=' height: 400px; overflow: auto; border: 2px groove blue; padding: 5px; text-align: justify;'>
				<?php
					$mat = $_SESSION['matricule'];

					$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matriculeEns = '$mat' ORDER BY dateprise DESC");

					if($aff = $rdv->fetch()=='0'){
						echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
						}
					else{
						while($aff = $rdv->fetch()){
							$mat_etd = $aff['matricule'];
							$etud = $connection->query("SELECT nom FROM etudiant WHERE matricule = '$mat_etd'");
							$nom_etd = $etud->fetch();
							$date1 = $aff['dateprise'];
							$date2 = $aff['daterel'];
							$objet = $aff['objet'];
					
							echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ETUDIANT  <font color = \'red\' > <strong> <u>'.$nom_etd['nom'].' </u> </strong> </font> LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
							}
						}
					$rdv->closeCursor();
				?>
			</div> 
		</div>
	</body>
</form>