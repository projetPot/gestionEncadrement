<?php 
session_start();
include('db.php');
$req1 = " SELECT nom,prenom,avatar,filiere FROM etudiant;";
$etudiant = $connection->query($req1);
$req2 = " SELECT nom,prenom,avatar,matriculeEns FROM enseignant;";
$enseignant = $connection->query($req2);
$req3 = " select etudiant.nom, etudiant.prenom, etudiant.matricule, etudiant.avatar, etudiant.filiere from etudiant left join encadre on etudiant.matricule = encadre.matricule where encadre.matricule is NULL;";
$non_encadre = $connection->query($req3);
$req4 = " select etudiant.avatar, etudiant.nom, etudiant.prenom, etudiant.filiere, enseignant.avatar as photo, enseignant.nom as encadreur from etudiant,enseignant,encadre where etudiant.matricule = encadre.matricule and enseignant.matriculeEns = encadre.matriculeEns";
$encadre = $connection->query($req4);
// $req5 = " SELECT nom, prenom, avatar from etudiant where filiere = 'gi' ";
// $gi = $connection->query($req5);
// $req6 = " SELECT nom, prenom, avatar from etudiant where filiere = 'geii' ";
// $geii = $connection->query($req6);
// $req7 = " SELECT nom, prenom, avatar from etudiant where filiere = 'grt' ";
// $grt = $connection->query($req7);
// $req8 = " SELECT nom, prenom, avatar from etudiant where filiere = 'gbm' ";
// $gbm = $connection->query($req8);
?>

<html>
	<head>
		<title> retrouvez des etudiants ou professeurs </title>
		<link rel="stylesheet" href="../style/index.css /">
		<link rel="stylesheet" href="../style/instant.css /">
		<script src="../script/script.js" >  </script>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php include('header.php'); ?>
		<select id="liste" > 
			<option onclick="les_listes(1,2,3,4);" > liste totale des etudiants </option> 
			<option onclick="les_listes(2,1,3,4);" > liste des etudiants non encadrés</option> 
			<option onclick="les_listes(3,2,1,4);"> liste des enseignants </option>
			<option onclick="les_listes(4,2,1,3);" > liste des etudiants encadrés</option>			
		</select>
		<table id="1" class="liste_etudiant">
			<tr id="titre_recherche"> 
				<th class="titre_recherche"> photo </th>
				<th class="titre_recherche"> nom </th>
				<th class="titre_recherche"> prenom </th>
				<th class="titre_recherche"> filiere </th>
			</tr>
			<?php 
				while($aff = $etudiant->fetch()){
					echo '<tr> <td class=\'search_student\'> <img width=50 src=\'../avatar/'.$aff['avatar'].'\'/> </td> <td class=\'search_student\'>'.$aff['nom'].'</td> <td class=\'search_student\' >'.$aff['prenom'].'</td> <td class=\'search_student\' >'.$aff['filiere'].' </td> </tr>';
					}
				$etudiant->closeCursor();
					
			?>
		</table>
		<table id="2" class="liste_etudiant">
			<tr id="titre_recherche"> 
				<th class="titre_recherche"> photo </th>
				<th class="titre_recherche"> nom </th>
				<th class="titre_recherche"> prenom </th>
				<th class="titre_recherche"> filiere </th>
			</tr>
			<?php 
				while($aff = $non_encadre->fetch()){
					echo '<tr> <td class=\'search_student\' value = '.$aff['matricule'].' id = '.$aff['matricule'].' > <img width=50 src=\'../avatar/'.$aff['avatar'].'\'/> </td> <td class=\'search_student\'>'.$aff['nom'].'</td> <td class=\'search_student\' >'.$aff['prenom'].'</td> <td class=\'search_student\' >'.$aff['filiere'];
					if($_SESSION['fonction'] == 'enseignant'){
						echo '<a name = \'demande\' class=\'submit\' href=\'demande1.php?matricule='.$aff['matricule'].'\'\' > proposez un encadrement </a> </td> </tr>';
						}
					else{
						echo '</td> </tr>';
						}
					}
				$non_encadre->closeCursor();
			?>
		</table>
		
		<table id="3" class="liste_etudiant">
			<tr id="titre_recherche"> 
				<th class="titre_recherche"> photo </th>
				<th class="titre_recherche"> nom </th>
				<th class="titre_recherche"> prenom </th>
			</tr>
			<?php 
				while($aff = $enseignant->fetch()){
					echo '<tr> <td class=\'search_student\' value = '.$aff['matriculeEns'].' id = '.$aff['matriculeEns'].'> <img width=50 src=\'../avatar/'.$aff['avatar'].'\'/> </td> <td class=\'search_student\'>'.$aff['nom'].'</td> <td class=\'search_student\' >'.$aff['prenom'];
					if($_SESSION['fonction'] == 'etudiant'){
						echo '<a name = \'demande\' class=\'submit\' href=\'demande1.php?matricule='.$aff['matriculeEns'].'\'\' > demandez un encadrement </a></td> </tr>';
						}
					else{
						echo '</td> </tr>';
						}
					}
				$enseignant->closeCursor();
			?>
		</table>
		<table id="4" class="liste_etudiant">
			<tr id="titre_recherche"> 
				<th class="titre_recherche"> photo </th>
				<th class="titre_recherche"> nom </th>
				<th class="titre_recherche"> prenom </th>
				<th class="titre_recherche"> filiere </th>
				<th class="titre_recherche"> encadreur </th>
			</tr>
			<?php 
				while($aff = $encadre->fetch()){
					echo '<tr> <td class=\'search_student\'> <img width=50 src=\'../avatar/'.$aff['avatar'].'\'/> </td> <td class=\'search_student\'>'.$aff['nom'].'</td> <td class=\'search_student\' >'.$aff['prenom'].' </td> <td class=\'search_student\' >'.$aff['filiere'].' </td> <td class=\'search_student\' > <img width=50 src=\'../avatar/'.$aff['photo'].'\'/> <br /> M.'.$aff['encadreur'].'</td> </tr>';
					}
				$encadre->closeCursor();
			?>
		</table>
		<?php include('footer.php'); ?>
	</body>
</html>	
