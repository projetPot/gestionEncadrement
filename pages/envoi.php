<?php include('db.php'); ?>
<?php 
$fonction = $_POST['fonction'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mat = $_POST['matricule'];
$tel = $_POST['numero'];
$pswd = $_POST['passe'];
$photo = $_FILES['foto'];
$extention = array("png","jpg","jpeg","bitmap","gif");
	if(isset($photo["name"]))
//on verifie si la photo existe 
	{
			 
		if($photo["size"] <= 1000000)
//on verifie si la taille de la photo n'est pas superieure à un megabits
		{
			$infosfichier =pathinfo($photo['name']);
//on recupere le nom de la photo
			$extphoto = $infosfichier['extension'];
//on recupere l'extension de la photo
			if(in_array($extphoto, $extention))
//on verifie si l'extension fait partie des extensions autorisées
			{
				$photo["name"] = $mat.".".$extphoto;
//on donne le nom du pseudo à la photo
				$photo1 = $photo["name"];
				move_uploaded_file($photo['tmp_name'], '../avatar/' .basename($photo['name']));
//on enregistre la photo dans un repertoire photo_inscription prealablement crée
			}
		}
	}
if($fonction != 'vous etes:'){
	if($fonction == 'Professeur'){
	$req1 = "INSERT INTO enseignant VALUES('$mat','$nom','$prenom','$pswd','$tel','$photo1',NOW(),'0');";
	$result = $connection->query($req1);
	echo $fonction.'  '.$nom.'  '.$prenom.'  '.$mat.'  '.$tel.'  '.$pswd;
	}
	else
	{
	$filiere = $_POST['filiere'];
	$req1 = "INSERT INTO etudiant VALUES('$mat','$nom','$prenom','$pswd','$filiere','$tel','$photo1',NOW(),'0');";
	$result = $connection->query($req1);
	echo $fonction.'  '.$nom.'  '.$prenom.'  '.$mat.'  '.$tel.'  '.$pswd.'  '.$filiere;
	}
	}
	$result->closeCursor();
	header('location: index.php');
?>