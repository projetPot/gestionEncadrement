<?php 
session_start();
$proposeur = $_GET['proposeur'];
$id = $_GET['id'];
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
			<?php echo '<form method=\'post\' action=\'accepter.php?proposeur='.$proposeur.'&id='.$id.'\' >'; ?>
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
		
		