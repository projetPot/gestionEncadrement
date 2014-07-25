	<?php

	?>
	<link rel="stylesheet" href="../style/index.css" />
	<script src="../script/script.js" >  </script>
	<script src="../script/jquery.js" >  </script>

	<header> 
		
		<p>
			<ul id="haut" >
				<li class="top" > <a class="menu" href="index.php"> accueil </a> </li>
				<li class="top" > <a class="menu" href="inscription.php"> inscription </a> </li>
				<li class='top' > <a class='menu' href='contact.php'> contact </a> </li>
				
				<?php if(isset($_SESSION['name'])){
					echo "<li class='top' > <a class='menu' href='messagerie.php'> messagerie </a> </li>";
				
				echo "<li class='top'> <a class='menu' href='recherche.php'> recherche </a> </li>";
				}
				?>
			</ul>
			
			
			<img src="../images/iut-logo.jpg" alt="logo de l'iut de Douala" width="220" height="150" style="float: right; margin-right: 30px; margin-top: 20px;">
			<?php 
			
	if (isset($_SESSION['matricule'])){
	include('db.php');
	$mat = $_SESSION['matricule'];
	$nbre = $connection -> query("SELECT COUNT(*) FROM demande WHERE receveur = '$mat' AND vue = '0'");
			$rdv = $connection->query("SELECT COUNT(*) FROM rendez_vous WHERE matricule = '$mat' AND vue = '0'");
			$qte= $nbre->fetch();
			$nb_rdv = $rdv->fetch();
					if($qte[0] != '0'){
						echo " <a href='mes_demandes.php' title='mes demandes' > <div style=' position: absolute; top: 60px; right: 50%;  width: 180px; height: 50px; border-radius: 5px; background-color: yellow; font-weight: bold; text-align: center; '> vous avez $qte[0] nouvelles demandes </div> </a>";
						}
					if($nb_rdv[0] != '0'){
						echo " <a href='liste_rendez_vous.php' title='mes rendez_vous' > <div style=' position: absolute; top: 120px; right: 50%; width: 180px; height: 50px; border-radius: 5px; background-color: pink; font-weight: bold; text-align: center; '> vous avez $nb_rdv[0] nouveaux rendez-vous </div> </a>";
						}
						}
					 ?>
		</p>
		
		<?php if(!isset($_SESSION['name'])) echo "<p style=' width: 90px; height:30px; background-color:#b00049; border-radius:10px 10px 10px 10px;'id='conn' onclick='show();' > <b> Connexion </b> </p>"; ?>
		<?php if(isset($_SESSION['name'])) include('session.php'); ?>
		<div id="con" style=" width: 25%; border: 1px solid #BBB0FB;; background-color: #EEECEC;"  >
			<div id="tt" style=" width: 100%; heigth: 10px; text-align: center;"> identification </div>
			<form action="login.php" method="post" >
				<table>
					<tr> <th style=" width: 20px;"> <label for="matricule" > matricule: </label> </th> <td style=" heigth: 10px;" > <input class="login" id="matricule" type="text" maxlength="20" name="matricule" placeholder="matricule" /> </td> </tr>
					<tr> <th style=" width: 10px;"> <label for="pass" > password: </label> </th> <td style=" heigth: 10px;" > <input class="login" type="password" maxlength="36" name="passe" placeholder="password" /> </td> </tr>
				</table>
				<input class="submit" type="submit" value="connexion"  style="position: absolute; left: -5px; bottom: 0px; "/>
			</form>
			<input type="image" src="../images/close.png" onclick="hidde();" style="position: absolute; right: 0px; top: 0px; heigth: 10px;"/>
		</div>
		<div style="position:absolute; right: 14px; top: 180px;"> 
			<table>
				<tr><td width="100"><label for="search"><big style="color:white;">Rechercher:</big></label> </td>
					<td><input type="search" id="search" name="search" style="background-color:#fff7df;"/></td> 
					<td><input type="submit" value="" id="img-search" style="background-image : url('../images/search1.png'); width : 40px; height: 30px;" onmouseover="imageRecherche1();" onmouseout="imageRecherche2();" ></input></td>
				</tr>
			</table>
		</div>
		
	</header><div id="block"></div>
