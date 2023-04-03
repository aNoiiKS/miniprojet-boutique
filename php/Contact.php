<?php session_start();
include('recupdonneform.php');
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<?php include('head.php') ; ?>
<body>
    <!-- Header -->
    <?php include('header.php') ; ?>

    <!-- Navigation Horizontale -->
    <?php include('menuhorizontal.php') ; ?>

    <!-- Navigation verticale + Contenu -->
    <div class="row">

        <!-- Navigation Verticale-->
        <?php include('menuvertical.php') ; ?>

        <!-- Contenu -->
		<!-- Je donne un id à la section pour la différencier des autres pages si besoin -->
	    <section id="Contact">
	        <h2> Demande de contact </h2>
            <form method="post" action="" id = "FormContact" >
                <table>
                    <tr>
                        <td>
                            <label for="nom"> Nom :</label>
                        </td>
                        <td>
                            <input type="text" name="nom" id="nom" placeholder="Nom"  />
							<span id='missNom' name='missNom'><?php echo"<span style='color: red;'>".$missNom;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prenom"> Prénom :</label>
                        </td>
                        <td>
                            <input type="text" name="prenom" id="prenom" placeholder="Prénom" />
							<span id='missPrenom'><?php echo"<span style='color: red;'>".$missPrenom;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="bday">Date de Naissance :</label>
                        </td>
                        <td>
                            <input type="date" name="bday" id = 'bday' required><span id="missBday" ><?php echo"<span style='color: red;'>".$missBday;?></span>
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genre"> Genre :</label>
                        </td>
                        <td>
                            <!-- Ici je crée une classe "genre" pour les input type radio pour pas que les paramètres des autres input s'appliquent sur eux vu qu'ils sont un peu différent-->
			                <!-- Je donne également une id au Premier bouton pour pouvoir placer le bloc correctement sur le site cf css -->
			                <input type="radio" name="genre" value="Homme" checked class="genre">
                            <label for="Homme"> Homme </label>
			                <input type="radio" name="genre" value="Femme" checked class="genre">
			                <label for="Femme"> Femme </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email"> Email :</label>
							
                        </td>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Email" />
							<span id='missEmail'><?php echo"<span style='color: red;'>".$missEmail;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="job-select">Fonction:</label>
                        </td>
                        <td>
                            <select name="job" id="job-select">
                                <option value="0">Sans profession</option>
                                <option value="A">Agriculture, marine, pêche</option>
                                <option value="B">Bâtiment, travaux publics</option>
                                <option value="C">Électricité, électronique</option>
                                <option value="D">Mécanique, travail des métaux</option>
                                <option value="E">Industries de process</option>
                                <option value="F">Matériaux souples, bois, industries graphiques</option>
                                <option value="G">Maintenance</option>
                                <option value="H">Ingénieurs et cadres de l'industrie</option>
                                <option value="J">Transports, logistique et tourisme</option>
                                <option value="K">Artisanat</option>
                                <option value="L">Gestion, administration des entreprises</option>
                                <option value="M">Informatique et télécommunications</option>
                                <option value="N">Études et recherche</option>
                                <option value="P">Administration publique, professions juridiques, armée et police</option>
                                <option value="Q">Banque et assurances</option>
                                <option value="R">Commerce</option>
                                <option value="S">Hôtellerie, restauration, alimentation</option>
                                <option value="T">Services aux particuliers et aux collectivités</option>
                                <option value="U">Communication, information, art et spectacle</option>
                                <option value="V">Santé, action sociale, culturelle et sportive</option>
                                <option value="W"> Enseignement, formation</option>
                                <option value="X">Politique, religion</option>
                                <option value="Ed">Étudiant</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sujet"> Sujet :</label>
                        </td>
                        <td>
                            <input type="text" name="sujet" id="sujet" placeholder="Sujet"  />
							<span id='missSujet'><?php echo"<span style='color: red;'>".$missSujet;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="message"> Message :</label>
                        </td>
                        <td>
                            <textarea name="message" id="message" placeholder="Votre message ici..." required ></textarea>
							<span id='missMessage'><?php echo"<span style='color: red;'>".$missMessage;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <button id='bouton_envoi' type = 'submit' name='valider'>Envoyer</button>
                        </td>
                    </tr>
                </table>
	        </form>
			
	    </section>
    </div>

    <!-- Footer -->
		<?php include('footer.php') ; ?>


   <script src="/js/script2.js"></script>

</body>
</html>