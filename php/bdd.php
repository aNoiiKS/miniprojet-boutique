

<?php
        // Récupération des paramètres de connexion
    	include "bddData.php";

        // Connexion à mysql
		if ( ! ($id_connexion = mysqli_connect($host, $user, $password)) ) {
		    echo "La connexion a renvoyé une erreur de code " . mysqli_errno($id_connexion). " avec le \
            message : " . mysqli_error($id_connexion) . "<br>";
            exit;
		}
		// Connexion à la base
		if ( ! mysqli_select_db( $id_connexion, $db)) {
            echo "La connexion à la base a renvoyé une erreur de code " . mysqli_errno($id_connexion). " \
            avec le message : " . mysqli_error($id_connexion) . "<br>";
            exit;
        }
        // Création et envoi de la requête
        $query = "SELECT * FROM Categorie ";
        if ( ! ($result = mysqli_query($id_connexion, $query))) {
            echo "Echec de la requête avec le code d’erreur " . mysqli_errno($id_connexion). " \
            et le message : " . mysqli_error($id_connexion) . "<br>";
            exit;
        } else {
                // Recuperation des résultats
                while ($row = mysqli_fetch_row($result)) {
                    $_SESSION['Menu'][$row[0]] = [];
                }
            }
			
			$query = "SELECT * FROM Produit ";
			if ( ! ($result = mysqli_query($id_connexion, $query))) {
            echo "Echec de la requête avec le code d’erreur " . mysqli_errno($id_connexion). " \
            et le message : " . mysqli_error($id_connexion) . "<br>";
            exit;
        } else {
                // Recuperation des résultats
				
                while ($row = mysqli_fetch_row($result)){
				$i=count($_SESSION['Menu'][$row[0]])+1;
				$_SESSION['Menu'][$row[0]][$i]['nom']=$row[0];
				$_SESSION['Menu'][$row[0]][$i]['reference']=$row[1];
				$_SESSION['Menu'][$row[0]][$i]['designation']=$row[2];
				$_SESSION['Menu'][$row[0]][$i]['prix']=$row[3];
				$_SESSION['Menu'][$row[0]][$i]['stock']=$row[4];
				$_SESSION['Menu'][$row[0]][$i]['image']=$row[5];
				
				
					} 
                }
			
            
			
            // Libération de la ressource et déconnexion de la base de données
            mysqli_free_result( $result );
            mysqli_close($id_connexion);
        ?>