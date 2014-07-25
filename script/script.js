
function show(){ document.getElementById('con').style.visibility = 'visible';}

function hidde(){ document.getElementById('con').style.visibility = 'hidden';}

function affiche(){
				var choix = document.getElementById('fnc'), etudiant = document.getElementById('etu'), prof = document.getElementById('pro');
				if(choix.value == 'Etudiant'){
					prof.style.display = 'none';
					etudiant.style.display = 'block';
					}
				else if(choix.value == 'Professeur'){
					etudiant.style.display = 'none';
					prof.style.display = 'block';
					}
				
				else{
					etudiant.style.display = 'none';
					prof.style.display = 'none';
					}
				}
			
function num(){
var nume = document.getElementById('numero'), ver = document.getElementById('numb');
if(isNaN(nume.value)){
	ver.style.color = 'red';
	ver.value = ' entrez votre numero';
	nume.style.backgroundColor = 'gray';
	nume.value = ' ';
	num.focus();
	}
else{
	ver.value = ' ';
	nume.style.backgroundColor = 'white';
	}
}
	
function verifi(){
	var pass1 = document.getElementById('passe'),ecrit = document.getElementById('verif'), pass2 = document.getElementById('comp');
	
	if( pass1.value =="" && pass2.value ==""){
		ecrit.value = ' ';
		pass2.style.backgroundColor = 'white';
		}
	else if(pass1.value !== pass2.value){
		ecrit.style.color = 'red';
		ecrit.value = 'incorrect';
		pass2.style.backgroundColor = 'gray';

		}
	else{
		ecrit.style.color = 'green';
		ecrit.value = 'correct';
		pass2.style.backgroundColor = 'white';
		}
	}
	
function photo(){
var foto = document.getElementById('foto'), foto1 = document.getElementById('foto1'), image;
if(foto.value){
image = "<img src='"+foto.value+"' style='width: 150px'//>";
foto1.innerHTML = image;
foto1.style.display = 'block';
}
else{ foto1.style.display = 'none';}
}

function les_listes(liste1, liste2, liste3, liste4){

	// var demande = document.getElementsByName('demande');
	
	document.getElementById(liste1).style.display = 'block';
	document.getElementById(liste2).style.display = 'none';
	document.getElementById(liste3).style.display = 'none';
	document.getElementById(liste4).style.display = 'none';
	// for(i=0; i< demande.length; i++){
	// demande[i].onclick = function(){location = '../pages/demande.php';};
	// }
	
	}
	
function imageRecherche1(){
			var addr = getElementById('img-search');
			
			addr.style.backgroundImageUrl='url(\'../images/search2.png\')';
	}
	
			function imageRecherche2(){
			var addr = getElementById('img-search');
			addr.style.backgroundImageUrl='url(\'../images/search1.png\')';

	}
	
	function aff(){
				 // if(user != "select a connected user to speak with him"){
				var div = document.getElementById('nom'), span = document.getElementById('ouv');
				div.style.visibility =  'visible';
				span.style.visibility = 'hidden';
				 // alert(user);
				// }
				 // var users = document.getElementById('user');
				 // alert(users.innerHTML);
				 // users.html(user);
				 // $('#user').html(user);	
				 // alert(users.innerHTML);
				
				/* users.html(user); */
				// }else
				  // alert(user);
			 }
			 
			 
			function masq(){
			
				// if(user != "select a connected user to speak with him"){

				var div = document.getElementById('nom'), span = document.getElementById('ouv');
				div.style.visibility =  'hidden';
				span.style.visibility = 'visible';
				 // var users = document.getElementById('user');
				 // alert(users.innerHTML);
				 // users.html(user);
				 // $('#user').html(user);	
				 // alert(users.innerHTML);
				// }
				
			 }
			 
			 function arret(){

				var div = document.getElementById('nom'), span = document.getElementById('ouv');
				div.style.visibility =  'hidden';
				span.style.visibility = 'hidden';
			 }
			 
		$(function() {
		$('#ok-send-message').css('position', 'absolute').css('bottom','85px').css('right','380px');
		$('#ok-send-message').hide();
		});
			var user = "select a connected user to speak with him";

			function userConnect(thisl){
			var userConnected = thisl.innerHTML;
			user = 	thisl.innerHTML;
			$('#user').html(user);
			aff();
			return userConnected;
			}


				

			function discussionInstantannee() {
				var destinateur1 = document.getElementById('user');
				var destinataire = destinateur1.innerHTML;
				 $.ajax({
					  url: "simple.php?destinataire=" + destinataire,
					  type: "get",
					  success: function(data){
							$('.displayInstantInstant').html(data);     
					  },
					  error:function(){
						  $(".displayInstantInstant").html('There was an error updating the settings');
					  }   
					});  
					
					var footerSet = $('.contentSend:last').position(),
					position    = $('.displayInstantInstant').scrollTop() + footerSet.top + 60;
					
					$('.displayInstantInstant').scrollTop(position);
			}	

			setInterval(discussionInstantannee, 1000);

			function userConnected() {
				 $.ajax({
					  url: "simple2.php",
					  type: "get",
					  success: function(data){
							$('.mini_bloc2').html(data);     
					  },
					  error:function(){
						  $(".mini_bloc2").html('There was an error updating the list of user connected');
					  }   
					});  
			}	

			setInterval(userConnected, 2000);
			
			function sendIT(textToSend){
				console.log("envoi du message a l'utilisateur");
				var receiveUser1 = document.getElementById('user');
				var receiveUser = receiveUser1.innerHTML;

				$.ajax({
					url: "sendMessge.php?textToSend=" + textToSend + "&receiveUser=" + receiveUser,
					type: "get",
					success: function(data){
					console.log("message envoyé avec success");
					},
					error: function(){
					console.log("message non envoyé !!!!! ");
					}	
				});
				
				document.s.messageInstant.value = "";
				$('#ok-send-message').fadeIn(2000).fadeOut(2000);

			}
