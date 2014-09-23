
<?php
$this->titre = "Connexion";
require 'Vue/_Commun/barreNavigation.php';
?>

<div class="row">
    <h2>Connexion</h2>
    <form action="index.php" method="post">

        <table id='connexion'>

            <tr>
                <td>Utilisateur : </td><td><input type='text' name='user'/></td>
            </tr>

            <tr>
                <td>Mot de passe : </td><td><input type='password' name='password'/></td>
            </tr>

            <tr>
                <td colspan='2' class='btn'><input type='submit' name='connex' value='Connexion'/></td>
            </tr>

        </table>

    </form>
    
</div>

