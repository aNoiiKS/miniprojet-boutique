<?php session_start();?>
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
		<section id="panier">
			<h2>Mon Panier</h2>
            <?php if(isset($temp)) {?>
                <table>
                    <tr>
                        <td  colspan ="2" valign="top">
                            <?php
                                echo $temp;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan ="2" valign="top">
                            <?php
                                echo $temp;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan ="2" valign="top">
                            <?php
                                echo $temp;
                            ?>
                        </td>
                    </tr>
                </table>
                <button> Passer la commande </button>
            <?php } ?>
	</div>

	<!-- Footer -->
	<?php include('footer.php') ; ?>

	<script src="/js/script.js"></script>

</body>
</html>