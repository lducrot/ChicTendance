<?php
try { 
    include("header.php");
}
catch (Exception $e) {
    $messageErreur = $e->getMessage().'('.$e->getFile().', ligne '.$e->getLine().')';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chic Tendance - Style</title>
    </head>
        <?php include("header.php"); ?>
    <body>
        <?php foreach ($stmtGenre as $ligne)
        { 
            $stmtContenuGenre = $bdd->prepare("SELECT COUNT(styl_id) AS nbContenuGenre FROM t_style WHERE STYL_ID=?");
            $stmtContenuGenre->execute(array($ligne['STYL_ID']));
            $ligneContenuGenre = $stmtContenuGenre->fetch();
            $nomGenre = "robe de".$ligneContenuGenre['STYL_LIBELLE'];
        }
        ?>
        <ul class="breadcrumb">
            <li><a class="filAriane" href="accueil.php">Accueil</a></li>
            <li class="active"><?= $nomGenre ?></li>
            
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

