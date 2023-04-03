<?php session_start();
include('php/bdd.php'); 
?>
<!DOCTYPE html>
<html>
<!-- Head -->
 <?php include('php/head.php') ; ?>

<body>
	

    <!-- Header -->
    <?php include('php/header.php') ; ?>

    <!-- Navigation Horizontale -->
	<?php include('php/menuhorizontal.php') ; ?>

    <!-- Navigation verticale + Contenu -->
    <div class="row">

        <!-- Navigation Verticale-->
		<?php include('php/menuvertical.php') ; ?>

        <!-- Contenu -->
		<!-- Je donne un id à la section pour la différencier des autres pages si besoin -->
        <section id="home">
			<h2> L'univers Shonen pour vous ! </h2>
			<img src="img/home.jpg" />
			<p> Retrouvez vos personnages préférés en mangas, figurines et goodies.<br> Une question ? Contactez-nous <a href="/php/Contact.php">ici </a> <br> Ou directement en magasin : <a href="https://www.google.com/maps/place/CY+Tech/@49.034665,2.0698768,15z/data=!4m2!3m1!1s0x0:0x301dd6c7102e1852?sa=X&ved=2ahUKEwjFtKCpv6jvAhVOx4UKHcLvBqkQ_BIwEnoECCwQBQ">Avenue du Parc, Cergy</a></p>
        </section>
    </div>

    <!-- Footer -->
    <?php include('php/footer.php') ; ?>

    <script src="js/script.js"></script>
	
</body>
</html>