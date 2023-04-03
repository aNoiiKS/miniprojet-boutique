<?php foreach($_SESSION['Menu'] as $cat => $nom ){
	$requete = "INSERT INTO Categorie VALUES ('".$cat."');\n";
	file_put_contents('Shonenshopdate.sql',$requete,FILE_APPEND);
	foreach($nom as $objet){
			$requete = "INSERT INTO Produit VALUES ('".$cat."','".$objet["reference"]."','".$objet["designation"]."','".$objet["prix"]."','".$objet["stock"]."','".$objet["image"]."');\n";
			file_put_contents('Shonenshopdate.sql',$requete,FILE_APPEND);
	}
}
		
	?>