<section>
            <img src="/img/header.png" />
            <nav>
                <ul><!--   
                    --><li><a href="../index.php">Accueil</a></li><!--
                    --><li><h4> Nos produits</h4></li><!--
                    --><li><a href="/php/Menu.php?cat=Mangas">Mangas</a></li><!--
                    --><li><a href="/php/Menu.php?cat=figurines">Figurines</a></li><!--
                    --><li><a href="/php/Menu.php?cat=goodies">Goodies</a></li><!--
                    --><li><a href="/php/Contact.php">Contact</a></li><!--
                    --><li> Utilisateurs connectés </li>
                </ul>
                <?php if(isset($_SESSION['UserData']['Username'])) {?>
                        <?php
                            echo "<div style='color:green;text-align:center;'>".$_SESSION['UserData']['Username']."</div>";
                        ?>
                <?php } ?>
            </nav>
</section>