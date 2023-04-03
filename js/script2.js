			var formValid = document.getElementById("bouton_envoi");
			
            var prenom = document.getElementById("prenom");
            var missPrenom = document.getElementById("missPrenom");
			var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
			
			var nom = document.getElementById("nom");
			var missNom = document.getElementById("missNom");
			var nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
			
			var email = document.getElementById("email");
			var missEmail = document.getElementById("missEmail");
			
			var sujet = document.getElementById("sujet");
			var missSujet = document.getElementById("missSujet");
			
			var message = document.getElementById("message");
			var missMessage = document.getElementById("missMessage");
			
			var bday = document.getElementById("bday");
			var missBday = document.getElementById("missBday");
			
			
			const today = new Date().toISOString().split("T")[0];
			const Validbday = () => {
				let daymin = new Date(today);
				let daymax = new Date(today);
				daymin.setDate(daymin.getDate() -365*120);
				daymax.setDate(daymax.getDate() -365*13);
				let bdayv1 = daymin.toISOString().split('T')[0];
				let bdayv2 = daymax.toISOString().split('T')[0];
				bday.min = bdayv1;
				bday.max = bdayv2;
				
			}
			Validbday();		
            
            formValid.addEventListener('click', validation);

function validatedate()
  {
  var date = document.getElementById("bday");
  var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
  var pdate = date.value.split('-');
  var dd = parseInt(pdate[2]);

  var mm  = parseInt(pdate[1]);
  var yy = parseInt(pdate[0]);  
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
  if (yy<1901 || yy>2008){
	  return true;
  }
  if (mm==1 || mm>2)
  {
  if (dd>ListofDays[mm-1])
  {
  return false;
  }
  }
  if (mm==2)
  {
  var lyear = false;
  if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
  {
  lyear = true;
  }
  if ((lyear==false) && (dd>=29))
  {
  return false;
  }
  if ((lyear==true) && (dd>29))
  {
  return false;
  }
  }
  else
  {
  return false;
  }
  }  
 function validerEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

            function validation(event){
				//Prenom

                //Si le champ est vide
                if (prenom.validity.valueMissing){
                    event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
					
                }
				 //Si le format de données est incorrect
                else if (prenomValid.test(prenom.value) == false){
                    event.preventDefault();
                    missPrenom.textContent = 'Format incorrect, Format attendu : Prénom';
                    missPrenom.style.color = 'red';
					prenom.style.backgroundColor = 'red';
				//Pour enlever l'erreur une fois le problème réglé.
                }else{ 
					missPrenom.textContent = '';
					prenom.style.backgroundColor='';
                }
				
				//Nom
				if (nom.validity.valueMissing){
                    event.preventDefault();
                    missNom.textContent = 'Nom manquant';
                    missNom.style.color = 'red';
                }
				
                else if (nomValid.test(nom.value) == false){
                    event.preventDefault();
                    missNom.textContent = 'Format incorrect, Format attendu : Nom';
                    missNom.style.color = 'red';
					nom.style.backgroundColor = 'red';
                }else{ 
					missNom.textContent = '';
					nom.style.backgroundColor = '';
                }
				
				
				//Email
				if (email.validity.valueMissing){
                    event.preventDefault();
                    missEmail.textContent = 'Adresse email manquante';
                    missEmail.style.color = 'red';
                }
				else if (!validerEmail(email.value)){
                    event.preventDefault();
                    missEmail.textContent = 'Format incorrect, Format attendu : pseudo@exemple.nomdomaine';
                    missEmail.style.color = 'red';
					email.style.backgroundColor = 'red';
                }else{ 
				missEmail.textContent = ' ';
				email.style.backgroundColor='';
                }
				//Message
				  if (message.validity.valueMissing){
                    event.preventDefault();
                    missMessage.textContent = 'Veuillez entrer un message';
                    missMessage.style.color = 'red';
					message.style.backgroundColor = 'red';
					
                }
				else{
					missMessage.textContent = ' ';
					message.style.backgroundColor="";
				}
				//Sujet
				  if (sujet.value==""){
                    event.preventDefault();
                    missSujet.textContent = 'Veuillez renseigner un sujet';
                    missSujet.style.color = 'red';
					sujet.style.backgroundColor = 'red';
                }
				else{
					missSujet.textContent=' ';
					sujet.style.backgroundColor="";
				}
				//Date de Naissance
				if (bday.validity.valueMissing){
                    event.preventDefault();
                    missBday.textContent = 'Veuillez renseigner une date de naissance valide';
                    missBday.style.color = 'red';
					bday.style.backgroundColor = 'red';
				}
				else if (validatedate()){
					event.preventDefault();
                    missBday.textContent = 'Veuillez renseigner une date de naissance valide';
                    missBday.style.color = 'red';
					bday.style.backgroundColor = 'red';
				}
				else{
						bday.style.backgroundColor='';
						missBday.textContent="";
				 
			}
			}