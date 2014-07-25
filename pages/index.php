<?php session_start(); ?>
<! DOCTYPE html >
</html>
	<head>
		<meta charset="utf-8" />
		<title>  accueil </title>

	</head>
	<body>

		<?php include('header.php'); ?>
						<?php
if(isset($_SESSION['matricule'])){
				$mat = $_SESSION['matricule'];
if ($_SESSION['fonction'] == 'enseignant'){
$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matriculeEns = '$mat' ORDER BY dateprise DESC");

				
				if($aff = $rdv->fetch()=='0'){
				echo "<div style=' width: 400px; background-color: rgb(238, 236, 236); height: 200px; overflow: auto; position: fixed; top: 150px; right: 10px;'>";
				
					echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
					echo "</div>";
					}
				else{
				echo "<div style=' width: 400px; background-color: rgb(238, 236, 236); height: 200px; overflow: auto; position: fixed; top: 150px; right: 10px; '>";
				echo " <div style=' width: 100%; height: 10%; background-color: blue; text-align: center; color: white; ' > VOS RENDEZ-VOUS </div>";
				while($aff = $rdv->fetch()){
				$mat_etd = $aff['matricule'];
$etud = $connection->query("SELECT nom FROM etudiant WHERE matricule = '$mat_etd'");
$nom_etd = $etud->fetch();
				$date1 = $aff['dateprise'];
				$date2 = $aff['daterel'];
				$objet = $aff['objet'];
					
					echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ETUDIANT  <font color = \'red\' > <strong> <u>'.$nom_etd['nom'].' </u> </strong> </font> LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
					}
					echo "</div>";
					}
					}
else{
$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matricule = '$mat' ORDER BY dateprise DESC");

				
				if($aff = $rdv->fetch()=='0'){
					echo "<div style=' width: 400px; background-color: rgb(238, 236, 236); height: 100px; position: fixed; top: 150px; right: 10px;'>";
					echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
					echo "</div>";
					}
				else{
				echo "<div style=' width: 400px; background-color: rgb(238, 236, 236); height: 200px; overflow: auto; position: fixed; top: 150px; right: 10px;'>";
				echo " <div style=' width: 100%; height: 10%; background-color: blue; text-align: center; color: white; ' > VOS RENDEZ-VOUS </div>";
				while($aff = $rdv->fetch()){
				$date1 = $aff['dateprise'];
				$date2 = $aff['daterel'];
				$objet = $aff['objet'];
				
					echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ENCADREUR LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
					
					}
					echo "</div>";
					}
			}
	}
			?>
		
		<nav style=" position: absolute; right: 31%;" >
			<div id="presentation" OnClick="echo 'bonjour';" > <center> PRESENTATION DE L'IUT DE DOUALA </center> </div>
			<div style="background-color: #EEECEC; width: 90%; padding: 8px; font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Bienvenu à l'IUT(Institut Universitaire de Technologies) de Douala. Cet institut forme en cycle 
			BTS(Brevet de Technicien Superieur), en DUT(Diplome Universitaire de Technologie) et en Licence technologique. dans les plates-formes suivantes :<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTIN (Plate-Forme des Technologies de l'Information & du Numérique).<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTI (Plate-Forme des Technologies Idustrielles) .<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTT (Plate-Forme des Technologies du Tertiaire) .
			</div>
		</nav>
		<img src="../images/student1.jpg" style="float: right; margin-top: 50px;">
		<img src="../images/teacher.jpg" style="float: left; margin-top: 50px; margin-left: 100px;  width: 150px;">
		<img src="../images/iut2.jpg" style="position: absolute; top: 490px; left: 270px;">
		
		<script language="JavaScript" type="text/JavaScript">
			var urls;
			function animate(pos) {
			  pos %= urls.length;
			  document.images["animation"].src = urls[pos];
			  window.setTimeout("animate(" + (pos + 1) + ");", 5000)
			}
			window.onload = function() {
			  urls = new Array("../images/img.jpg", "../images/vert.jpg", "../images/yellow.jpg", "../images/blue.jpg");
			  animate(0);
			}

		</script>
		<div id="bloc">                              	
		  <?php //include('footer.php'); ?>
		</div>
		
		<table style="position: absolute; top: 610px; right: 55px;font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
		
			<tr> 
								<td width="400px">	<b>Comment utiliser toute les fonctionnalités de ce site web  : utilisateurs</b><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Proceder d'abord à une inscription brêve de moins de 3 minutes vous
								permettant d'augmenter vos fonctionnalités sur ce site via l'onglet inscription plus haut .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Puis connecter vous via l'onglet Connexion situé en haut à gauche	pour acceder à votre espace personnel .
												
								</td> 


								
								
								<td width="400">	<b>Comment se Connecter dans son compte : étudiants ou Enseignants</b><br/>
							
								&nbsp;&nbsp;&nbsp;&nbsp;** Connecter vous en clicquant sur l'onglet Connexion situé en haut à gauche .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Remplissez le formulaire de connection et terminé par connexion. Vous serrez redirigé vers votre espace. <br/>
												
								</td> 
								
							<td width="400px">	<b>Comment utiliser toute les fonctionnalités de ce site web  : user</b><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Proceder d'abord à une inscription brêve de moins de 3 minutes vous
								permettant d'augmenter vos fonctionnalités sur ce site via l'onglet inscription plus haut .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Puis connecter vous via l'onglet Connexion situé en haut à gauche	pour acceder à votre espace personnel .
												
								</td> 
			</tr>
		</table>
		<br/><br/>
	<!--	<div  style="position: absolute; top: 830px; background-color: #CFCBCB; width: 1500px; padding-top: 6px;  padding-left: 30px; font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
			
			<u><b>NIVEAU 1  :  PROJET WEB </b></u>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Sajouguet Dassi Marcel Orleando(Fi 1)&nbsp;&nbsp;&nbsp;&nbsp; ** &nbsp;&nbsp;&nbsp;&nbsp;Benhhgueut Magamtcheu Doriane(Fi 1)&nbsp;&nbsp;&nbsp;&nbsp; ** 
			&nbsp;&nbsp;&nbsp;&nbsp; Nyobe Kendeck Armel(Fi 1)&nbsp;&nbsp;&nbsp;&nbsp; ** &nbsp;&nbsp;&nbsp;&nbsp; Nkele Kingue Esther(Fi 1)&nbsp;&nbsp;&nbsp;&nbsp; ** &nbsp;&nbsp;&nbsp;&nbsp;Seugue Vanessa(Fi 2)
		<br/>   <center>supervisé par l'enseignant Mr. <b>Ayimdji Armel</b> du cour de <u>programmation Web</u> Année Académique : <u><b>2013 - 2014 </b></u></center>
		</div>
		-->
	<?php include('footer.php'); ?>
	</body>
</html>