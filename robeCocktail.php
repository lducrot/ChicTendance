<?php
try { 
    include("header.php");
    
    $stmtStyle->execute(array(2));
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
        <title>Catégorie robes de cocktails</title>
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
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_rouge.jpg" title="Robe de cocktail rouge" /></a>
        <div class="caption">
          <h4>Robe de cocktail rouge</h4>
          <!--<p>Vous avez envie de vous faire remarquer ? Cette robe extremement tendance est parfaite pour vous !--><br />EUR 89.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 2-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_noire.jpg" title="Robe de cocktail noire" /></a>
        <div class="caption">
          <h4>Robe de cocktail noire</h4>
          <!--<p>Parfaite pour une soirée chic, cette robe élégante vous ira à ravir !--><br />EUR 99.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 3-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_rose.jpg" title="Robe de cocktail rose" /></a>
        <div class="caption">
          <h4>Robe de cocktail rose</h4>
          <!--<p>En portant cette robe aucun homme ne pourra vous resister. N'hésitez plus elle est faite pour vous !--><br />EUR 85.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 4-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_verte.jpg" title="Robe de cocktail verte" /></a>
        <div class="caption">
          <h4>Robe de cocktail verte</h4>
          <!--<p>Grâce à cette ravissante robe vous serez la plus belle pour allez danser et rendrez jalouse toutes les femmes.--><br />EUR 79.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--</div>
    <div class="row">
        <div class="col-sm-3 col-md-2" id="cache"></div>-->
    <!--Robe 5-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_blanche.jpg" title="Robe de cocktail blanche" /></a>
        <div class="caption">
          <h4>Robe de cocktail blanche</h4>
          <!--<p>Cette robe est tellement brillante qu'elle fera de vous la plus étincelante lorsque vous la portrez.--><br />EUR 85.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 6-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_bleue.jpg" title="Robe de cocktail bleue" /></a>
        <div class="caption">
          <h4>Robe de cocktail bleue</h4>
          <!--<p>Cette robe fera de vous la plus convoitée femmes !--><br />EUR 79.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 7-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_corail.jpg" title="Robe de cocktail corail" /></a>
        <div class="caption">
          <h4>Robe de cocktail corail</h4>
          <!--<p>En portant ce tissu dorée vous deviendrez la plus lumineuse des femmes.--><br /><br />EUR 89.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 8-->
    <div class="col-xs-12 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a class="thumbnail" href="details.php"><img class="robeCocktail" src="Contenu/images/robe_cocktail_violette.jpg" title="Robe de cocktail violette" /></a>
        <div class="caption">
          <h4>Robe de cocktail violette</h4>
          <!--<p>Cette robe d'une extreme tendance est parfaite pour les femmes tentatrice.--><br />EUR 79.99
          <p><a href="#" class="btn btn-primary">Voir détails</a><a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
        </div>
    </body>
     <?php include("footer.html"); ?>
</html>
