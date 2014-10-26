<?php/* c'est la page session qui sera inclue dans toutes les pages du site si une session est ouverte. Elle contient toutes les informations necessaires pour faire comprendre à un individu qu'il est deja connecté:telles que son pseudo, son avatar(photo) et un bouton deconnection.*/?>

	<div style="position: absolute; top: 10px; left: 10px; width: 170px; height: 150px;" id="ident">
	
		<?php 
			if(isset ($_SESSION['name']) &&  $_SESSION['photo']!=""){ echo ' <img title='.$_SESSION['name'].' width=\'120\' src=\'../avatar/'.$_SESSION['photo'].'\' />  <br /> <font color=\'yellow\'> <strong> Bienvenu <u> '.$_SESSION['name'].'</u> </strong> </font>';} 
			else if(isset ($_SESSION['name'])&& $_SESSION['photo']==0){ echo ' <img title='.$_SESSION['name'].' width=\'120\' src=\'../avatar/avatar.jpg\' /> <br /> <font color=\'yellow\'> <strong> Bienvenu <u> '.$_SESSION['name'].'</u> </strong> </font>';} ?>
			<br /> 
			
			<div id = "setting" style=" width: 120px; text-align: center; cursor: pointer; background: 034768;" onclick="affi('parametres','setting');" > 
				<img  src="../images/setting.png" style="width: 20px; height: 20px; float: left; margin-top: 1px; margin-left: 2px;" /> settings 
			</div> 
			
			<div id="parametres" style=" width: 120px; border: blue solid 1px; background-color: #EEECEC; display: none; "> 
			
				<div class="setting" id = "setting" style=" text-align: center; background: 034768;" >  
					<img  src="../images/setting.png" style="width: 20px; height: 20px; float: left; margin-top: 1px; margin-left: 2px;" />  settings 
				</div> 
				
				<div class="setting" onclick="location = 'update.php?code=password';">  
					<img src="../images/pass.png" style="width: 20px; height: 20px; float: left; margin-left: 2px; " /> change password 
				</div> 
				
				<div class="setting"onclick="location = 'update.php?code=avatar';"> 
					<img src="../images/avatar1.png" style="width: 20px; height: 20px; float: left; margin-left: 2px; " />changez la photo 
				</div> 
				
				<div  class="setting" id="show" onclick="affi('hidden','show'); location ='show.php';" > 
					<img src="../images/hid.png" style="width: 20px; height: 20px; float: left; margin-left: 2px;" /> soyez visible 
				</div> 
				
				<div class="setting" id="hidden" onclick="affi('show','hidden'); location = 'hidden.php';" > 
					<img src="../images/hid.png" style="width: 20px; height: 20px; float: left; margin-left: 2px;" /> soyez invisible 
				</div> 
				
				<div class = " setting" onclick="location = 'update.php?code=numero';"> 
					<img  src="../images/tel.png" style="width: 22px; height: 20px; float: left; margin-top: 1px; margin-left: 2px;" />changer de numero
				</div> 
				
				<div class="setting" onclick="location = 'deconnection.php';" > 
					<img src="../images/end.png" style="width: 15px; height: 15px; float: left; margin-left: 2px; " />deconnection  
				</div>  
				
				<div style=" color: #EEECEC;" > close 
					<img onclick = "affi('setting','parametres');" src="../images/up.png" style="width: 20px; height: 20px; float: right; cursor: pointer;" /> 
				</div> 
				
			</div>
			
	</div> 
	<br /> <br />
	
<script>

function affi(affiché,caché){
				var menu = document.getElementById(affiché), entete = document.getElementById(caché);
				
					menu.style.display = 'block';
					entete.style.display = 'none';
					
				}
</script>