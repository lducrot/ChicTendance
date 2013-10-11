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
        
            <div class="col-md-1">
            </div>  
            <!--div class="col-md-2" id="cache">
            </div>-->
            <div class="col-md-8">
                <center>
                    <h1 class="titreDetail">Robe De Soirée Rouge Tendance</h1>
                    <table class="detailRobe">
                        <tr>
                            <td rowspan="2">
                                 <img class="imgRobeSoireeRouge" src="Contenu/images/robe_soiree_rouge.jpg" />
                            </td>
                            <td class="RobeDetailTD">
                                <p class="detail">
                                    <u>Description</u> :<br /><br />
                                    Couturier : Louis Bodin<br />
                                    Matière : 96% polyester, 4% élasthanne<br />
                                    Entretien : Lavage à la main uniquement<br />
                                    Prix : 129.99€<br />
                                    Temps de livraison : 6 jours
                                </p>
                            </td>
                            <td class="btnPanier">
                                <a href="#" class="btn btn-default glyphicon glyphicon-shopping-cart"> Panier</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="detailRobetr" colspan="2">
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

