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
        <div class="col-md-3">
                <ul class="nav nav-stacked" id="listMenuStyle">
                    <h1 class="enTete">STYLES</h1>
                    <li class="active"><a href="robeSoiree.php">Robe de soirée <span class="badge">8</span></a></li>
                    <li class="active"><a href="robeCocktail.php">Robe de cocktail <span class="badge">8</span></a></li>
                    <li class="active"><a href="robeMariee.php">Robe de mariée <span class="badge">8</span></a></li>
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
                        <td class="RobeDetailTD">
                            <a href="robeSoiree.php">Robe de soirée</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td class="RobeDetailTD">
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre toutes vos soirées inoubliables.<br />
                            Nombre d'articles : 8</p>
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
                            <a href="robeCocktail.php"><img class="imgRobeCocktail" src="Contenu/images/robe_cocktail_rose.jpg" /></a>
                        </td>
                        <td class="RobeDetailTD">
                            <a href="robeCocktail.php">Robe de cocktail</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td class="RobeDetailTD">
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre vos sorties chic inoubliables.<br />
                            Nombre d'articles : 8</p>
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
                            <a href="robeMariee.php"><img class="imgRobeMariee" src="Contenu/images/robe_mariee_3.jpg" /></a>
                        </td>
                        <td class="RobeDetailTD">
                            <a href="robeMariee.php">Robe de mariée</a><br />
                        </td>
                    </tr>
                    <tr>
                        <td class="RobeDetailTD">
                            <p>Vous trouverez dans cette catégorie de multiples choix de robes pour rendre votre mariage inoubliable.<br />
                            Nombre d'articles : 8</p>
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

