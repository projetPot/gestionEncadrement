<?php 
//cette page permet de recuperer et d'afficher les rendez-vous de l'utilisateur

$mat = $_SESSION['matricule'];

//on verifie si l'utilisateur est un enseignant ou un étudiant
if ($_SESSION['fonction'] == 'enseignant'){

//on recupère toutes les informations des champs dans la table rendez-vous de notre base de données où le champ matriculeEns correspond au matricule saisi lors de la connection
	$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matriculeEns = '$mat' ORDER BY dateprise DESC");
				
//on verifi le resultat retourné par la requête si c'est 0 c'est qu'il n'a aucun rendez-vous en cour
	if($aff = $rdv->fetch()=='0'){
	
		echo "<div class = 'ren_vous'>";
		echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
		echo "</div>";
		
		}
	else{
	
		echo "<div class = 'ren_vous'>";
		echo " <div class = 'header_rdv'> VOS RENDEZ-VOUS </div>";
		
		while($aff = $rdv->fetch()){
//on recupere chaque information contenu dans le champ matricule du turple courant de la table ren_vous qu'on passe en paramètres dans une autre requête envoyée pour la table etudiant où on recupere le nom correspondans pour le matricule courant
	$mat_etd = $aff['matricule'];
	$etud = $connection->query("SELECT nom FROM etudiant WHERE matricule = '$mat_etd'");
	
			$nom_etd = $etud->fetch();
			$date1 = $aff['dateprise'];
			$date2 = $aff['daterel'];
			$objet = $aff['objet'];
							
			echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ETUDIANT  <font color = \'red\' > <strong> <u>'.$nom_etd['nom'].' </u> </strong> </font> LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
			
			}
		echo "</div>";
		$etud->closeCursor();
		}
	}
//si l'utilisateur est un étudiant
else{

	$rdv = $connection->query("SELECT * FROM rendez_vous WHERE matricule = '$mat' ORDER BY dateprise DESC");
				
	if($aff = $rdv->fetch()=='0'){
	
		echo "<div class = 'ren_vous'>";
		echo " VOUS N'AVEZ AUCUN RENDEZ-VOUS EN COURS";
		echo "</div>";
		
		}
		
	else{
	
		echo "<div class = 'ren_vous'>";
		echo " <div class = 'header_rdv'> VOS RENDEZ-VOUS </div>";
		
		while($aff = $rdv->fetch()){
		
			$date1 = $aff['dateprise'];
			$date2 = $aff['daterel'];
			$objet = $aff['objet'];
				
			echo '<p id=\'cadre_demande\' > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$date1.' </strong> </p> <p id=\'demande\' > VOUS AVEZ RENDEZ-VOUS AVEC VOTRE ENCADREUR LE '.$date2.' AU SUJET DE : <font color=\'red\' > '.$objet.' </font></p> </p>';
					
			}
		echo "</div>";
		}
	}
	
$rdv->closeCursor();

?>