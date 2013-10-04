
<!DOCTYPE html>
<html>
    <head>
        <title>Chic Tendance - Nouveauté</title>
    </head>
        <?php include("header.html"); ?>
    <body>
        <ul class="breadcrumb">
            <li><a class="filAriane" href="accueil.php">Accueil</a></li>
            <li class="active">Nouveautes</li>
        </ul>
        <center><h1>Nouvelle collection</h1></center>
        <div class="row">
        <div class="col-md-3">
                <ul class="nav nav-stacked" id="listMenuStyle">
                    <h1 class="enTete">STYLES</h1>
                    <li class="active"><a href="robeSoiree.php">Robe de soirée <span class="badge">8</span></a></li>
                    <li class="active"><a href="robeCocktail.php">Robe de cocktail <span class="badge">8</span></a></li>
                    <li class="active"><a href="robeMariee.php">Robe de mariée <span class="badge">8</span></a></li>
                </ul>
        </div>
        <center>
        <table class="imgAccueil">
            <tr>
                <td>
                    <img class="imgNouveaute1" src="Contenu/images/robe_soiree_bleueFonce.jpg" title="Robe de soirée bleue séductrice" />
                </td>
                <td>
                    <img class="imgNouveaute2" src="Contenu/images/robe_mariee_2.jpg" title="Robe de mariée dentelle" />
                </td>
            </tr>
            <tr>
                <td>
                    <img class="imgNouveaute3" src="Contenu/images/robe_mariee_3.jpg" title="Robe de mariée perlée" />
                </td>
                <td>
                    <img class="imgNouveaute4" src="Contenu/images/robe_cocktail_bleue.jpg" title="Robe de cocktail bleue mystérieuse" />
                </td>
            </tr>
        </table>
        </center>
        </div>
    </body>
    <?php include("footer.html"); ?>
</html>
