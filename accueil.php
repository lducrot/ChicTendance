<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        
    </head>
        <?php include("header.html"); ?>
    <body> 
    <ul class="breadcrumb">
         <li><a class="filAriane" href="accueil.php">Accueil</a></li>
    </ul>
        
    <div class="row">
        <div class="col-md-3">
                <ul class="listMenuStyle">
                    <h1 class="enTete">STYLES</h1>
                    <a href="robeSoiree.php"><li>Robe de soirée (8)</li></a>
                    <a href="robeCocktail.php"><li>Robe de cocktail (8)</li></a>
                    <a href="robeMariee.php"><li>Robe de mariée (8)</li></a>
                </ul>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-8">
        <center>
        <table class="imgAccueil">
            <tr>
                <td rowspan="2">
                    <img class="imgAccueilRobeSoiree" src="Contenu/images/robe_soiree_bleueFonce.jpg" />
                </td>
                <td>
                    <img class="imgAccueilRobeMariee" src="Contenu/images/robe_mariee_4.jpg" />
                </td>
            </tr>
            <tr>
                <td>
                    <img class="imgAccueilRobeCocktail" src="Contenu/images/robe_cocktail_rouge.jpg" />
                </td>
            </tr>
        </table>
        </center>
        <p>Chic Tendance vous présente ces plus belles créations en robes de soirées, robes de mariée et robes de cocktails ! Grâce à elles vous êtes sûr d'être à la pointe de la mode. Il y en a assez pour satisfaire tout les goûts, alors n'hésitez plus !</p>
        </div></div>
        
    </body>
    <?php include("footer.html"); ?>
</html>
