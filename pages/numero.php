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
				<div style=" width: 45%; border: 1px solid blue; background-color: #EEECEC;" >
				<div class="leg" style=" width: 100%; heigth: 10px;"> CHANGEZ LE NUMERO </div>
				<form method="post" action="update_number.php">
					<table>
						<tr> 
							<th> <label for="ancien"> ancien numero </label> </th> 
							<td> <input type="text" name="ancien" id="ancien" maxlength="8" class="mod" /> </td>
						</tr>
						<tr> 
							<th> <label for="nouveau"> nouveau numero </label> </th> 
							<td> <input type="text" name="nouveau" id="passe" maxlength="8" class="mod" /> </td>
						</tr>
						<tr> 
							<th> <label for="conf"> confirmer numero </label> </th> 
							<td> <input type="text" name="conf" id="comp" maxlength="8" class="mod" onkeypress="verifi();" onblur="verifi();" /> </td>
							<td> <input type="text" style="border: none; width: 100%; background-color: #EEECEC; font-weight: bold;" id="verif" disabled="disabled"/> </td>
						</tr>
					 </table>
							 <input  class="submit" style="position: relative; bottom: -17px; right: -46%; " type="submit" value="OK" /> 
							
				</form>
			<div>
		</center>
		
	</body>
</html>