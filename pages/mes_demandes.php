<?php 
session_start();
?>
<! DOCTYPE html >
<html>
	<head>
		<title> consultez vos demandes </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href='../style/index.css' />
		<link rel="stylesheet" href='../style/instant.css' />
	</head>
	<body>
		<?php
			include('db.php');
				
			include('header.php');

			?>

			<div style=' width: 50%; margin: auto;' >
				<div class="leg" style=" width: 100%; heigth: 10px; text-align: center"> MES DEMANDES </div>
				<div style=' height: 400px; overflow: auto; border: 2px groove blue; padding: 5px; text-align: justify;'>
			<?php include('voir_demande.php'); ?>
				</div> 
			</div>
	</body>
</html>