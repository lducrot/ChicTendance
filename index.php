<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <LINK rel="stylesheet" type="text/css" href="design.css">
        <title>Accueil</title>
    </head>
    
    <div class="navbar navbar-default navbar-inverse" role="navigation">
        <!-- Partie de la barre toujours affichée -->
        <div class="navbar-header">
        <!-- Bouton affiché à droite si la zone d'affichage est trop petite -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget=".
        navbar-collapse">
                <span class="sr-only">Activer la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Chic Tendance</a>
        </div>
        <!-- Partie de la barre masquée en fonction de la zone d'affichage -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Se Connecter</a></li>
                <li><a href="#">Panier</a></li>
            </ul>
        </div>
    </div>
    
    <nav>
<!--        <a href="#">ACCUEIL</a>
        <a href="#">NOUVEAUTES</a>
        <a href="#">STYLES</a>-->
    <div class="row-xs-4">
        <ul class="nav nav-justified nav-stacked">
            <li class="active"><a href="index.php">ACCUEIL</a></li>
            <li><a href="nouveaute.html">NOUVEAUTES</a></li>
            <li><a href="style.php">STYLES</a></li>
        </ul>
    </div>
    </nav>
    
    <body>
        <img class="robe" href="robe_bleue.jpg" />
        <img class="robe" href="robe_rouge.jpg" />
        <img class="robe" href="robe_violette.jpg" />
    </body>
</html>
