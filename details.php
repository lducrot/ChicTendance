<!DOCTYPE html>
<html>
    <head>
        <title>Chic Tendance - Style</title>
    </head>
        <?php include("header.html"); ?>
    <body>
       
        <ul class="breadcrumb">
            <li><a class="filAriane" href="accueil.php">Accueil</a></li>
            <li><a class="filAriane" href="style.php">Style</a></li>
            <li><a class="filAriane" href="robeSoiree.php">Robes de soirées</a></li>
            <li class="active">Robe de soirée rouge tendance</li>
            
        </ul>
        
        <div class="row">
            <div class="col-md-2">
                <ul class="listMenuStyle">
                    <a href="robeSoiree.php"><li>Robe de soirée</li></a>
                    <a href="robeCocktail.php"><li>Robe de cocktail</li></a>
                    <a href="robeMariee.php"><li>Robe de mariée</li></a>
                </ul>
            </div>
            <div class="col-md-1">
            </div>  
            <!--div class="col-md-2" id="cache">
            </div>-->
            <div class="col-md-8">
                <center>
                    <h2>Robe de soirée rouge tendance</h2>
                    <table>
                        <tr>
                            <td rowspan="2">
                                 <img class="imgRobeSoireeRouge" src="Contenu/images/robe_soiree_rouge.jpg" />v
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>Vous avez envie de vous faire remarquer ? Cette robe extremement tendance est parfaite pour vous !</p>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>

        </div>
        
        <nav class="menuStyle">
            
        </nav>
        
        <section class="affichageRobes" style="padding:50px; border-radius:15px;">
            
        </section>
        
    </body>
    <?php include("footer.html"); ?>
</html>

