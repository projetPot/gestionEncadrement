<! DOCTYPE html >
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" src="../style/style.css" />
		<script src="../script/script.js" >  </script>
		<title> modification </title>
	</head>
	<body>
		<?php include('header.php'); ?>
		<center>
				<div style=" width: 50%; border: 1px solid blue; background-color: #EEECEC;">
				<div id="leg" style=" width: 100%; heigth: 10px;"> CHANGE PASSWORD </div>
				<form method="post" action="update_password.php">
					<table>
						<tr> 
							<th> <label for="ancien"> ancien mot de passe </label> </th> 
							<td> <input type="password" name="ancien" id="ancien" maxlength="36" class="mod" /> </td>
						</tr>
						<tr> 
							<th> <label for="nouveau"> nouveau mot de passe </label> </th> 
							<td> <input type="password" name="nouveau" id="passe" maxlength="36" class="mod" /> </td>
						</tr>
						<tr> 
							<th> <label for="conf"> confirmer mot de passe </label> </th> 
							<td> <input type="password" name="conf" id="comp" maxlength="36" class="mod" onkeypress="verifi();" onblur="verifi();" /> </td>
							<td> <input type="text" style="border: none; background-color: #EEECEC; font-weight: bold; width: 100%" id="verif" disabled="disabled"/> </td>
						</tr>
					 </table>
							 <input  class="submit" style="position: relative; bottom: -17px; right: -46.5%; " type="submit" value="OK" /> 
							
				</form>
			<div>
		</center>
		
	</body>
</html>