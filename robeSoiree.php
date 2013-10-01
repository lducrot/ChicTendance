<!DOCTYPE html>
<html>
    <head>
        <title>Catégorie robes de soirées</title>
    </head>
        <?php include("header.html"); ?>
    <body> 
    <ul class="breadcrumb">
         <li><a class="filAriane" href="accueil.php">Accueil</a></li>
         <li><a class="filAriane" href="style.php">Style</a></li>
         <li class="active">Robes de soirées</li>
    </ul>
        
    <div class="row">
        <div class="col-sm-6 col-md-2">
            <ul class="listMenuStyle">
                <h1 class="enTete">STYLES</h1>
                <a href="robeSoiree.php"><li class=>Robe de soirée (8)</li></a>
                <a href="robeCocktail.php"><li>Robe de cocktail (8)</li></a>
                <a href="robeMariee.php"><li>Robe de mariée (8)</li></a>
            </ul>
        </div>
    <!--Robe 1-->
    <div class="col-sm-6 col-md-2">
      <div class="thumbnail">
          <a class="thumbnail" href="details.php"><img class="robeSoiree" src="Contenu/images/robe_soiree_rouge.jpg" title="Robe de soirée rouge tendance" /></a>
        <div class="caption">
          <h3>Robe de soirée rouge tendance</h3>
          <br />EUR 129.99
          <p><a href="details.php" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 2-->
    <div class="col-sm-6 col-md-2">
      <div class="thumbnail">
        <img class="robeSoiree" src="Contenu/images/robe_soiree_blanche.jpg" title="Robe de soirée blanche étincelante" />
        <div class="caption">
          <h3>Robe de soirée blanche étincelante</h3>
          <!--<p>Cette robe est tellement brillante qu'elle fera de vous la plus étincelante lorsque vous la portrez.-->EUR 109.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 3-->
    <div class="col-sm-6 col-md-2">
      <div class="thumbnail">
        <img class="robeSoiree" src="Contenu/images/robe_soiree_verte.jpg" title="Robe de soirée verte audacieuse" />
        <div class="caption">
          <h3>Robe de soirée verte audacieuse</h3>
          <!--<p>Grâce à cette ravissante robe vous serez la plus belle pour allez danser et rendrez jalouse toutes les femmes.--><br />EUR 100.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
    <!--Robe 4-->
    <div class="col-sm-6 col-md-2">
      <div class="thumbnail">
        <img class="robeSoiree" src="Contenu/images/robe_soiree_bleueFonce.jpg" title="Robe de soirée bleue séductrice" />
        <div class="caption">
          <h3>Robe de soirée bleue séductrice</h3>
          <!--<p>En portant cette robe aucun homme ne pourra vous resister. N'hésitez plus elle est faite pour vous !--><br />EUR 129.99
          <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">  
      <div class="col-sm-6 col-md-2" id="cache"></div>
    <!--Robe 5-->
      <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
          <img class="robeSoiree" src="Contenu/images/robe_soiree_bleueClaire.jpg" title="Robe de soirée bleue attirante" />
          <div class="caption">
            <h3>Robe de soirée bleue attirante</h3>
            <!--<p>Cette robe fera de vous la plus convoitée femmes !--><br />EUR 104.99
            <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
          </div>
        </div>
      </div>
    <!--Robe 6-->
      <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
          <img class="robeSoiree" src="Contenu/images/robe_soiree_jaune.jpg" title="Robe de soirée dorée lumineuse" />
          <div class="caption">
            <h3>Robe de soirée dorée lumineuse</h3>
            <!--<p>En portant ce tissu dorée vous deviendrez la plus lumineuse des femmes.--><br />EUR 139.99
            <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
          </div>
        </div>
      </div>
    <!--Robe 7-->
      <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
          <img class="robeSoiree" src="Contenu/images/robe_soiree_violette.jpg" title="Robe de soirée violette tentatrice" />
          <div class="caption">
            <h3>Robe de soirée violette tentatrice</h3>
            <!--<p>Cette robe d'une extreme tendance est parfaite pour les femmes tentatrice.--><br />EUR 119.99
            <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
          </div>
        </div>
      </div>
    <!--Robe 8-->
      <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
          <img class="robeSoiree" src="Contenu/images/robe_soiree_beige.jpg" title="Robe de soirée beige élégante" />
          <div class="caption">
            <h3>Robe de soirée bleue attirante</h3>
            <!--<p>Parfaite pour une soirée chic, cette robe élégante vous ira à ravir !--><br />EUR 104.99
            <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
          </div>
        </div>
      </div>
    </div>
    </body>
     <?php include("footer.html"); ?>
</html>
