<?php 
session_start();
$proposeur = $_GET['matricule'];

?>
<! DOCTYPE html >
<html>
	<head>
		<title> domaine d'encadrement </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href='../style/index.css' />
		<link rel="stylesheet" href='../style/instant.css' />
	</head>
	<body>
		<?php include('header.php'); ?>
		<br /> <br />
		<center>
				<p> CHOISIR UN DOMAINE D'ENCADREMENT </p>
			<?php echo '<form method=\'post\' action=\'demande.php?proposeur='.$proposeur.'\' >'; ?>
				<select name="domaine" >
					<option> stage </option>
					<option> informatique </option>
					<option> electricité </option>
					<option> reseau et telecommunication </option>
					<option> mecanique </option>
					<option> physique </option>
				</select>
				<input type="submit" class="submit" value="OK" />
			</form>
		</center>
		
	</body>
</form>
		
		