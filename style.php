<!DOCTYPE html>
<html>
    <head>
        <title>Chic Tendance - Style</title>
    </head>
        <?php include("header.html"); ?>
    <body>
       
        <ul class="breadcrumb">
            <li><a class="filAriane" href="accueil.php">Accueil</a></li>
            <li class="active">Styles</li>
        </ul>
        
        <div class="row">
            <div class="col-md-3 article">
                <ul class="listMenuStyle">
                    <a href="robeSoiree.php"><li>Robe de soirée</li></a>
                    <a href="robeCocktail.php"><li>Robe de cocktail</li></a>
                    <a href="robeMariee.php"><li>Robe de mariée</li></a>
                </ul>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-8 article">
                <table>
                    <tr>
                        <td rowspan="2">
                            <img class="imgAccueilRobeSoiree" src="images/robe_soiree_bleueFonce.jpg" style="height:300px;width:auto;" />
                        </td>
                        <td>
                            <a href="robeSoiree.php">Robe de soirée</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="textAccueil">Vous trouverez dans cette catégorie de multiples choix de robes pour rendre toutes vos soirées inoubliables</p>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
        
        <nav class="menuStyle">
            
        </nav>
        
        <section class="affichageRobes" style="padding:50px; border-radius:15px;">
            
        </section>
        
    </body>
    <?php include("footer.html"); ?>
</html>

