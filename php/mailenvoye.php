<?php session_start();
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
	    <section id="home">
	        <h2> Mail envoyé ! </h2>
			<p><a href="/index.php"> Retour à la page d'accueil </a></p>
			<img src="/img/home.jpg" />
            
	    </section>
    </div>

    <!-- Footer -->
		<?php include('footer.php') ; ?>


</body>
</html>