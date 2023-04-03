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
		<section>
			<h2><?php echo $_GET['cat'];?></h2>
			<table border=1 id="table">
				<tr>
					<td>Photo</td>
					<td>Référence</td>
					<td>Désignation</td>
					<td>Prix</td>
					<td>Stock</td>
					<td>Quantité commandée</td>
				</tr>
				<?php for($i=1; $i<=count($_SESSION["Menu"][$_GET['cat']]);$i++){
					include('bouclemenu.php');
				}
				?>
			</table>
			<div id="sort">
				<button onclick="sort(this)" id="sortPrix" value="Prix">$</button>
				<button onclick="sort(this)" id="sortAbc" value="Abc">ABC</button>
				<button onclick="sort(this)" id="sortStock" value="Stock">Stock</button>
			</div>
			<button onclick="toggleStock()" id="stock">Cacher Stock</button>
		</section>
	</div>

	<!-- Footer -->
		<?php include('footer.php') ; ?>

	<script src="/js/script.js"></script>

</body>
</html>