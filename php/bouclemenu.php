<tr>
					<td><?php echo "<img src='".$_SESSION['Menu'][$_GET['cat']][$i]['image']."'/>"; ?></td>
					<td><?php echo $_SESSION["Menu"][$_GET['cat']][$i]['reference'];?></td>
					<td>  <?php echo $_SESSION["Menu"][$_GET['cat']][$i]['designation'];?></td>
					<td><?php echo $_SESSION["Menu"][$_GET['cat']][$i]['prix'];?></td>
					<td>
						<p> <?php echo $_SESSION["Menu"][$_GET['cat']][$i]['stock'];?></p>
					</td>
					<?php include('commande.php') ; ?>
				</tr>
				