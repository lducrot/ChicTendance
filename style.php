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
            <div class="col-md-2">
                <ul class="listMenuStyle">
                    <h1 class="enTete">STYLES</h1>
                    <a href="robeSoiree.php"><li>Robe de soirée</li></a>
                    <a href="robeCocktail.php"><li>Robe de cocktail</li></a>
                    <a href="robeMariee.php"><li>Robe de mariée</li></a>
                </ul>
        </div>
            <div class="col-md-1"></div>
        <article>
            <!--Style robe de soiree-->
            <div class="col-md-8">
                <table>
                    <tr>
                        <td rowspan="2">
                            <a href="robeSoiree.php"><img class="imgRobeSoiree" src="Contenu/images/robe_soiree_bleueFonce.jpg" /></a>
                        </td>
                        <td>
                            <a href="robeSoiree.php">Robe de soirée</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre toutes vos soirées inoubliables</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2" id="cache"></div><div class="col-md-1"></div>
            <!--Style robe de cocktail-->
            <div class="col-md-8">
                <table>
                    <tr>
                        <td rowspan="2">
                            <a href="robeCocktail.php"><img class="imgRobeSoiree" src="Contenu/images/robe_cocktail_rose.jpg" /></a>
                        </td>
                        <td>
                            <a href="robeCocktail.php">Robe de cocktail</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre vos sorties chic inoubliables</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2" id="cache"></div><div class="col-md-1"></div>
            <!--Style robe de mariee-->
            <div class="col-md-8">
                <table>
                    <tr>
                        <td rowspan="2">
                            <a href="robeMariee.php"><img class="imgRobeSoiree" src="Contenu/images/robe_mariee_3.jpg" /></a>
                        </td>
                        <td>
                            <a href="robeMariee.php">Robe de mariée</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre votre mariage inoubliable</p>
                        </td>
                    </tr>
                </table>
            </div>
        </article>
        </div>
        
        <nav class="menuStyle">
            
        </nav>
        
        <section class="affichageRobes">
            
        </section>
        
    </body>
    <?php include("footer.html"); ?>
</html>

