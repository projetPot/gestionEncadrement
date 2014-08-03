<?php session_start(); ?>
<! doctype html >
<html>
	<head>
		<meta charset="utf-8" />
		<title>  accueil </title>
	
	</head>
	<body>

		<?php include('header.php'); ?>
		<?php  if(isset($_SESSION['matricule'])) include('infos.php'); ?>
		
		<div id="nav" style="" >
			<div id="presentation" OnClick="echo 'bonjour';" > <center> PRESENTATION DE L'IUT DE DOUALA </center> </div>
			<div style="background-color: #EEECEC; width: 99%; padding: 8px; font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Bienvenu à l'IUT(Institut Universitaire de Technologies) de Douala. Cet institut forme en cycle 
			BTS(Brevet de Technicien Superieur), en DUT(Diplome Universitaire de Technologie) et en Licence technologique. dans les plates-formes suivantes :<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTIN (Plate-Forme des Technologies de l'Information & du Numérique).<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTI (Plate-Forme des Technologies Idustrielles) .<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;** PFTT (Plate-Forme des Technologies du Tertiaire) .
			</div>
		</div>
		<img src="../images/student1.jpg" style="float: right; margin-top: -180px;" />
		<img src="../images/teacher.jpg" style="float: left; margin-top: -180px; margin-left: 100px;  width: 150px;" />
		<img src="../images/iut2.jpg" width="1000" style="position: absolute; top: 60%; left: 170px;" />
		
		<script language="JavaScript" type="text/JavaScript">
			(function() { 
	var storage = {}; 
	function addEvent(element, event, func) { 
		if (element.attachEvent) {
			element.attachEvent('on' + event, func);
		} else {
			element.addEventListener(event, func, true);
		}
	}
	function init() { 
		var elements = document.getElementsByTagName('div'), nbre = elements.length;
		for(var i=0; i<nbre; i++){
			if(elements[i].className == 'ren_vous'){
			addEvent(elements[i], 'mousedown', function(e) {
			var s = storage; 
			this.style.zIndex = '100';
			s['target'] = e.target || event.srcElement; 
			s['offsetX'] = e.clientX - s.target.offsetLeft;
			s['offsetY'] = e.clientY - s.target.offsetTop;
			});
			}
			addEvent(elements[i], 'mouseup', function() {storage = {};});
			}
		
		addEvent(document, 'mousemove', function(e) {
		var target = storage.target; 
		if (target) {target.style.top = e.clientY - storage['offsetY'] +'px'; 
		target.style.left = e.clientX - storage['offsetX'] +'px';
		}});
	}
	init(); 
})();
		</script>
		
		
		<table style="position: absolute; top: 80%; right: 50%;font-size: 20px; font-weight: normal; font-family: 'Agency FB';">
		
			<tr> 
								<td width="400px">	<b>Comment utiliser toute les fonctionnalités de ce site web  : utilisateurs</b><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Proceder d'abord à une inscription brêve de moins de 3 minutes vous
								permettant d'augmenter vos fonctionnalités sur ce site via l'onglet inscription plus haut .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Puis connecter vous via l'onglet Connexion situé en haut à gauche	pour acceder à votre espace personnel .
												
								</td> 
								
								
								<td width="400">	<b>Comment se Connecter dans son compte : étudiants ou Enseignants</b><br/>
							
								&nbsp;&nbsp;&nbsp;&nbsp;** Connecter vous en clicquant sur l'onglet Connexion situé en haut à gauche .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Remplissez le formulaire de connection et terminé par connexion. Vous serrez redirigé vers votre espace. <br/>
												
								</td> 
								
							<td width="400px">	<b>Comment utiliser toute les fonctionnalités de ce site web  : user</b><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Proceder d'abord à une inscription brêve de moins de 3 minutes vous
								permettant d'augmenter vos fonctionnalités sur ce site via l'onglet inscription plus haut .<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;** Puis connecter vous via l'onglet Connexion situé en haut à gauche	pour acceder à votre espace personnel .
												
								</td> 
			</tr>
		</table>
		<br/><br/>
	<?php include('footer.php'); ?>
	</body>
</html>