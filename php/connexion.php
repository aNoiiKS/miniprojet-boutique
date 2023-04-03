<?php

    if(isset($_POST['Submit'])) {

        $strJsonFileContents = file_get_contents(__DIR__."/users.json");
        $logins = json_decode($strJsonFileContents, true);

        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        if (isset($logins[$Username]) && $logins[$Username]['password'] == $Password) {
            $_SESSION['UserData']['Username']=$logins[$Username]['username'];
            $_SESSION['loggedin'] = true;
        }  else {
            $msg ="<span style='color:red'>Information incorrecte</span>";
        }
    }
?>
<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
 
            <h3 align="left"> Connecté à <?php print_r($_SESSION['UserData']['Username']) ?></h3>
            <a href="/php/panier.php"><input name="Panier" type="submit" value="Mon Panier" class="Disconnect"></input></a>
            <a href="/php/deconnexion.php" class="DisconnectA"><input name="Disconnect" type="submit" value="Se déconnecter" class="Disconnect"></input></a>
<?php } else { ?> 
<form method="post" name="loginform">
    <table>
        <tr>
            <td>
                <label for="login"> Identifiant :</label>
            </td>
            <td>
                <input type="text" name="Username" id="login" placeholder="Identifiant" class="Input" />
            </td>
            <td rowspan="2">
                <input name="Submit" type="submit" value="Se connecter" class="Disconnect"></input>
            </td>
        </tr>
        <tr>
            <td>
                <label for="password"> Mot de passe :</label>
            </td>
            <td>
                <input type="password" name="Password" id="password" placeholder="Mot de passe" class="Input" />
            </td>
        </tr>
            <?php if(isset($msg)) {?>
                <tr>
                    <td  colspan ="2" valign="top">
                        <?php
                            echo $msg;
                        ?>
                    </td>
                </tr>
            <?php } ?>
    </table>
</form>
<?php } ?>