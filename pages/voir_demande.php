<?php
	$mat = $_SESSION['matricule'];
	$fonction = $_SESSION['fonction'];
	$msg = $connection -> query("SELECT id,date,message,proposeur,domaine FROM demande WHERE receveur = '$mat' ORDER BY date DESC");
	$etd = $connection -> query("SELECT matricule FROM encadre ");
	$list_etd = $etd->fetch();
	$update = $connection->query("UPDATE demande SET vue = '1' WHERE receveur = '$mat'");
				
	if($aff = $msg->fetch() != '0'){
					
		while($aff = $msg->fetch()){
					
			$proposeur = $aff['proposeur'];
			$id = $aff['id']; 
			$domaine = $aff['domaine'];
					
			echo '<p id="cadre_demande" > <p style=\' margin-top: auto; border: 2px groove blue; width: 80px; \'> <strong> '.$aff['date'].' </strong> </p> <p id="demande" > '.$aff['message'].'</p> </p>';
						
			if($fonction == 'enseignant'){
						
		
				if($proposeur == $list_etd['matricule']){
								 
					echo '<a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'accepter.php?proposeur='.$proposeur.'&id='.$id.'&domaine='.$domaine.'\' title=\'accepter\'\'> accepter </a> <a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'refuser.php?id='.$id.'\' title=\'refuser\'> refuser </a> </p> <br /> <br />';
								
					}
				else{
							
					echo '</p> <p> <font color = \'red\'> cet étudiant essai de se debarasser de son encadreur </font> <a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'punition.php?code=\'punir\'&proposeur='.$proposeur.'\' title=\'punir\'> punir </a> <a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'refuser.php?id='.$id.'\'title=\'refuser\'> refuser </a> </p> <br /> <br />';
								
					}
							
				} 
						
			else {
						
				echo '<a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'accepter.php?proposeur='.$proposeur.'&id='.$id.'&domaine='.$domaine.'\' title=\'accepter\'\'> accepter </a> <a style=\' width: 100px; margin-bottom: 2px;\' class=\'submit\' href=\'refuser.php?id='.$id.'\'title=\'refuser\'> refuser </a> </p> <br /> <br />';
							
				}
						
			}
		}
	else{
		echo 'VOUS N\'AVEZ AUCUNE DEMANDE EN COURS';
		}
	$msg->closeCursor();
	$etd->closeCursor();
	$update->closeCursor();
?>