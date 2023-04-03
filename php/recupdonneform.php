<?php 

	@$nom=$_POST["nom"];
	@$prenom=$_POST["prenom"];
	@$email=$_POST["email"];
	@$bday=$_POST["bday"];
	@$genre=$_POST["genre"];
	@$sujet=$_POST["sujet"];
	@$message=$_POST["message"];
	@$valider=$_POST['valider'];


$missNom='';
$missPrenom='';
$missEmail='';
$missBday='';
$missSujet='';
$missMessage='';



if(isset($valider)){
		if(empty($nom)){
			
			$missNom='Nom laissé vide';

			
		}
		elseif(!preg_match("#^[A-Z][A-Za-z\é\è\ê\-]+$#", $nom)){
			$missNom='Format attendu : "Dupont" (Majuscule)';
			
		}

		if(empty($prenom)){
			$missPrenom='Prénom laissé vide';
			
		}
		elseif(!preg_match("#^[A-Z][A-Za-z\é\è\ê\-]+$#", $prenom)){
			$missPrenom='Format attendu : "Jean" (Majuscule)';
			
		}

		if(empty($email)){
			$missEmail='Mail laissé vide';
			
		}
		elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
			$missEmail='Format attendu : "jean.dupont@xyz.com"';
			
		}

		if(empty($bday)){
			$missBday='Date laissée vide';
		
		}
		elseif ($bday > date("Y")-6 || $bday < date("Y")-122){
			$missBday='Date invalide';
			
		}

		if(empty($sujet)){
			$missSujet='Sujet laissé vide';
		
		}

		if(empty($message)){
			$missMessage='Message laissé vide';

		}
		
		else{
			$from = $_POST['email'];
			$to = "martinerwa@eisti.eu";
			$subject = $_POST["sujet"];
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
			header('Location: http://localhost/php/mailenvoye.php');
		 
		}
}