<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>messagerie</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../style/instant.css" />
		<script type="text/javascript" src="../script/jquery.js"></script>
		<script type="text/javascript" src="../script/script.js"></script>
	</head>
	
	<body style=" height: 850px;" >
		<?php include("header.php"); ?>
		
		<a href='mes_demandes.php' class= "submit" title='mes demandes' style='width: 120px; height: 20px; position: absolute; right: 10px; border-radius: 5px; border: outset 2px blue; '> mes demandes </a>
		
		<?php 
		if($_SESSION['fonction'] == 'enseignant'){
			echo "<a href='rendez_vous.php' class= 'submit' title='mes demandes' style='width: 120px; height: 20px; position: absolute; right: 140px; border-radius: 5px; border: outset 2px blue; '> mes rendez-vous </a>";
			}
		else{
			echo "<a href='liste_rendez_vous.php' class= 'submit' title='mes demandes' style='width: 120px; height: 20px; position: absolute; right: 140px; border-radius: 5px; border: outset 2px blue; '> mes rendez-vous </a>";
			}
		?>
		
		<div id="nom" style="visibility: hidden;" >
			<div  id="ferm" style="height: 25px; " > 
				<?php echo '<img style=\' width: 30px; height: 100%;\' src=../avatar/'.$_SESSION['photo'].' /> <span style=\'position: absolute; top: 1px; left: 15%; \' > <b>'.$_SESSION['name'] ?> 
				& <span id="user">user</span></span> </b> 
				<img src="../images/bas.png" width="20" style="position: absolute; right: 20px;" onclick="masq();" />
				<img src="../images/close.png" style="position: absolute; right: 0px;" onclick="arret();" /> 
			</div>
		  
				<div class="displayInstantInstant"> </div> 
									 
					<div class="formInstant">  
						<form name="s">
							<textarea class="textInstant" name="messageInstant" placeholder="my new message to send"></textarea><br/><br/>
							<input class="ss" type="button" onclick="sendIT(s.messageInstant.value);" name="sendInstant" value="send" />
						</form>								
					 
					</div>
		</div>
		
		<p id="ouv"  style=" height: 25px; visibility: hidden;" > 
			<?php echo '<img style=\' width: 30px; height: 100%;\' src=../avatar/'.$_SESSION['photo'].' /> <b>'.$_SESSION['name'] ?> 
			</b> & <span id="user">user</span> 
			<img src="../images/haut.png" width="20" style="position: absolute; right: 20px;" onclick="aff();" />
			<img src="../images/close.png" style="position: absolute; right: 0px;" onclick="arret();" />
		</p>
		<div id="triangle"></div>
			<DIV class="mini_bloc2"> <!-- UTILISATEURS CONNECTES SUR LE SITE WEB -->  </DIV>
			
			<img src="../images/ok.PNG" id="ok-send-message" />
			<?php include('footer.php'); ?>
	</body>
</html>
		
	