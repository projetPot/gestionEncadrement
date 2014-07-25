<! DOCTYPE html >
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" src="../style/style.css" />
		<link rel="stylesheet" src="../style/instant.css" />
		<script src="../script/script.js" >  </script>
		<title> modification </title>
	</head>
	<body>
		<?php include('header.php'); ?>
		<center>
				<div style=" width: 40%; border: 1px solid blue; background-color: #EEECEC;">
				<div class="leg" style=" width: 100%; heigth: 10px;"> CHANGEZ LA PHOTO </div>
				<form method="post" action="update_avatar.php" enctype="multipart/form-data">
					<table>
						<tr> 
							<th> <label for="ancien"> ancienne photo </label> </th> </tr>
						<tr> <td align="center" > <img  title=<?php echo $_SESSION['name']; ?> width='120' src='../avatar/<?php echo $_SESSION['photo']; ?>' /> </td> </tr>
					
						<tr> <th > <label for="nouveau"> nouvelle photo </label> </th> </tr>
						<tr> <td> <input type="file" name="foto" id="foto" class="fichier" onChange="photo();"/> </td>
								 <td> <div  id="foto1" class="fichier" style=" display: none; width: 75px; heigth: 75px;" > </div></td>
						</tr>
						
					 </table>
							 <input  class="submit" style="position: relative; bottom: -17px; right: -46%; " type="submit" value="OK" /> 
							
				</form>
			<div>
		</center>
		
	</body>
</html>