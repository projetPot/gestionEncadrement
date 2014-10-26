<?php 
session_start();

$fonction = $_SESSION['fonction'];
$mat = $_SESSION['matricule'];
$photo = $_FILES['foto'];

//$verifie = false;
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
				header("location: special_deconnect.php?matricule=$mat&fonction=$fonction&photo=$photo1");
			}
		}
	}
else{
?>
<script> alert('la taille de la photo est trop grande ou le format de la photo n\'est pas pris en charge'); </script>
<?php
}
?>