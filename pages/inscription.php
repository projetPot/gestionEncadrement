<?php session_start(); ?>
<! DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<script src="../script/script.js" >  </script>
		<title> enregistrement </title>
	</head>
	<body>
		<?php include('header.php'); ?>
		
		
		<table style="position: absolute; top: 380px; left: 5px;font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
		
			<tr> 
								<td width="300px">	<b>Avantages pour les Enseignants d'utiliser cette Plate-forme en Ligne :</b><br/><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** suivre tout ses étudiants simultannément via une discussion instantannée(messagerie).<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Mobilité de suivi des étudiants en cas de voyage .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Stockage immédiat des comptes rendus des précédent rende-vous entre les deux .
												
								</td> 
			</tr>
		</table>
		
		<table style="position: absolute; top: 380px; right: 5px;font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
		
			<tr> 
								<td width="300px">	<b>Avantages pour les Etudiants d'utiliser cette Plate-forme en Ligne :</b><br/><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** faire un choix d'encadreur en cas de manque (plus de changement apres).<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Voir les enseignants désirant vous encadrer .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** facilite la communication avec son encadreur .
												
								</td> 
			</tr>
		</table>
		<center>
			<div style=" width: 50%; border: 1px solid #BBB0FB; background-color: #EEECEC; margin-left: 300px;" id="cadre">
				<div class="leg" style=" width: 100%; heigth: 10px;"> INSCRIPTION </div>
				<form method="post" action="envoi.php" enctype="multipart/form-data" style="z-index: 800px;">
					<div id="blo">
					<table>
						<tr >
							<th > <label for="fonction"> fonction </label> </th>
							<td > <select name="fonction" id="fnc" onChange="affiche();">
									<option selected > vous etes: </option>
									<option  > Professeur </option>
									<option > Etudiant </option>
								 </select> 
							</td>
							<td> <div style="display: none; border: 2px groove; position: absolute; margin-top: -10px;" id="pro">
									<div id="list"> vous etes enseignant de: </div>
									<input type="checkbox" name="math" value="mathematiques" /> <label for="math"> mathematiques </label> <br />
									<input type="checkbox" name="info" /> <label for="info" value="informatique" > informatique </label> <br />
									<input type="checkbox" name="phy" /> <label for="phy" value="physique" > physique </label> <br />
								</div>
								<select id="etu" style="display: none; position: absolute; margin-top: -10px;" name="filiere">
									<option selected> vous etes étudiant en: </option>
									<optgroup label="PFTIN "> 
										<option value="GI"> GI </option>
										<option value="GEII"> GEII </option>
										<option value="GRT"> GRT </option>
										<option value="GBM"> GBM </option>
									</optgroup>
									<optgroup label="PFTI" >
										<option value="GMI"> GMI </option>
										<option value="GIM"> GIM </option>
										<option value="GTE"> GTE </option>
										<option value="GMP"> GMP </option>
										<option value="GME"> GME </option>
										<option value="GFE"> GFE </option>
									</optgroup>
									<optgroup label="PFTT" >
										<option value="GAPMO"> GAPMO </option>
										<option value="GLT"> GLT </option>
										<option value="OGA"> OGA </option>
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<th> <label for="nom"> nom </label> </th>
								 <td> <input type="text" placeholder="nom" maxlength="20" name="nom" id="nom" class="text" /> </td>
						</tr>
						<tr>
							<th> <label for="prenom"> prenom </label> </th>
								 <td> <input type="text" placeholder="prenom" maxlength="20" name="prenom" id="prenom" class="text" /> </td>
						</tr>
						<tr>
							<th> <label for="matricule"> matricule </label> </th>
								 <td> <input type="text" placeholder="matricule" maxlength="8" name="matricule" id="matricule" class="text" /> </td>
						</tr>
						<tr>
							<th> <label for="numero"> telephone </label> </th>
								 <td> <input type="text" placeholder="telephone" maxlength="8" name="numero" id="numero" class="text" onChange="num();"/> </td>
							<td> <input type="text" style="border: none; background-color: #b7c4e7; font-weight: bold; width:85px;" id="numb" disabled="disabled"/> </td>
						</tr>
						<tr>
							<th> <label for="passe"> mot de passe </label> </th>
								 <td> <input type="password" placeholder="mot de passe" maxlength="36" name="passe" id="passe" class="text"/> </td>
						</tr>
						<tr>
							<th> <label for="conf"> confirmation </label> </th>
								<td> <input type="password" placeholder="confirmation" id="comp" maxlength="36" class="text" name="conf" onBlur="verifi()"  onkeydown="verifi()"/> </td>
								<td> <input type="text" style="border: none; background-color: #b7c4e7; font-weight: bold; width:85px;" id="verif" disabled="disabled"/> </td>
						</tr>
						<tr>
							<th> <label for="foto">photo </label> </th>
								 <td> <input type="file" name="foto" id="foto" class="fichier" onChange="photo();"/> </td>
								  
						</tr>
					</table>
					</div>
					<table style="margin-right:-400px;">
						<tr>
							<td> <input type="submit" value="OK" /> </td>
							<td> <input type="reset" value="réinitialisez" /> </td>
						</tr>
					</table>
				</form>
			</div>
		</center>
		<div  id="foto1" class="fichier" style=" position: absolute; right: 500px; top: 720px; display: none; width: 75px; heigth: 75px;" > </div>
	<?php include('footer.php'); ?>
	</body>
</html>