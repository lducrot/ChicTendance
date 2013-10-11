<?php
try { 
    include("header.php");
    
    $stmtStyle->execute(array(3));
    $ligneStyle = $stmtStyle->fetch();
    $nomStyle=$ligneStyle['STYL_LIBELLE'];
}
catch (Exception $e) {
    $messageErreur = $e->getMessage().'('.$e->getFile().', ligne '.$e->getLine().')';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Catégorie robes de mariées</title>
    </head>
    <body> 
    <ul class="breadcrumb">
         <li><a class="filAriane" href="accueil.php">Accueil</a></li>
         <li class="active"><?= $nomStyle; ?></li>
    </ul>
        
    <div class="row" id="styles">
       
    </div>
        <div class="row">
        <!--Robe 1-->
        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_1.jpg" title="Robe de mariée élégante" /></a>
            <div class="caption">
              <h4>Robe de mariée élégante</h4>
              <!--<p>Vous avez envie de vous faire remarquer ? Cette robe tres élégante est parfaite pour vous !--><br />EUR 199.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 2-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_2.jpg" title="Robe de mariée dentelle" /></a>
            <div class="caption">
              <h4>Robe de mariée dentelle</h4>
              <!--<p>Parfaite pour un mariage d'exception, cette robe élégante vous ira à ravir !--><br /><br /><br />EUR 299.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 3-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_3.jpg" title="Robe de mariée perlée" /></a>
            <div class="caption">
              <h4>Robe de mariée perlée</h4>
              <!--<p>En portant cette robe, tous les regards se tourneront vers vous. N'hésitez plus elle est faite pour vous !--><br />EUR 285.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 4-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_4.jpg" title="Robe de mariée plume" /></a>
            <div class="caption">
              <h4>Robe de mariée plume</h4>
              <!--<p>Grâce à cette magnifique robe votre mariage sera un réel conte de fées et vous rendrez jalouse toutes les femmes.--><br />EUR 379.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        
       
         <!--<div class="col-sm-6 col-md-2" id="cache"></div>-->
        <!--Robe 5-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_5.jpg" title="Robe de mariée duvet" /></a>
            <div class="caption">
              <h4>Robe de mariée duvet</h4>
              <!--<p>Cette robe fera de vous la plus convoitée femmes !--><br /><br /><br /><br />EUR 179.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 6-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_6.jpg" title="Robe de mariée étincelante" /></a>
            <div class="caption">
              <h4>Robe de mariée étincelante</h4>
              <!--<p>Cette robe originale brillera de mille feux sur vous.--><br />EUR 279.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 7-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_7.jpg" title="Robe de mariée légère" /></a>
            <div class="caption">
              <h4>Robe de mariée légère</h4>
              <!--<p>Grâce à cette robe simple et aérienne vous serez la princesse de cet évènement.--><br />EUR 485.99
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        <!--Robe 8-->
        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <a class="thumbnail" href="details.php"><img class="robeMariee" src="Contenu/images/robe_mariee_8.jpg" title="Robe de mariée classe" /></a>
            <div class="caption">
              <h4>Robe de mariée classe</h4>
              <!--<p>En portant cette robe proche du corps vous deviendrez la plus féminine et désirée des femmes.--><br /><br />EUR 589.99<
              <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
            </div>
          </div>
        </div>
        </div>
    </body>
     <?php include("footer.html"); ?>
</html>
