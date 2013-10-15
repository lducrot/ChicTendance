<!DOCTYPE html>
<html>
    <head>
        <title><?= $titre ?></title>
        <meta charset="utf-8">
        <link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="Contenu/design.css">
        <link rel="icon" type="image/png" href="Contenu/images/icone.png" />
        <link href="Librairies/bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
        <link href="Librairies/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="Librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">  
        <link href="Librairies/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
            <!-- Partie de la barre toujours affichee -->
            <div class="navbar-header">
                <!-- Bouton affiché a droite si la zone d'affichage est trop petite -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" >
                    <span class="sr-only">Activer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="titreEnTete" href="accueil.php">Chic Tendance</a>
            </div>
            <!-- Partie de la barre masquee en fonction de la zone d'affichage -->  
            <nav class="nav nav-collapse navbar-collapse" role="navigation" >
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="recherche">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Recherche">
                        </div></form>
                    <li><a class="enTete" href="#">Inscription</a></li>
                    <li><a class="enTete" href="#">Se Connecter</a></li>
                    <li><a class="enTete" href="#">Panier</a></li>
                </ul>
            </nav>

        </div>

        <br /><br /><br /><br /><br />

        <nav>
            <!--<div class="row-xs-4">
                <ul class="nav nav-justified nav-stacked">
                    <li class="active"><a class="navPrincipal" href="accueil.php">Accueil </a></li>
                    <li><a class="navPrincipal" href="robeSoiree.php">Robes De Soirée <span class="badge">8</span></a></li>
                    <li><a class="navPrincipal"  href="robeCocktail.php">Robes De Cocktail <span class="badge">8</span></a></li>
                    <li><a class="navPrincipal" href="robeMariee.php">Robes De Mariée <span class="badge">8</span></a>  
                </ul>
            </div>-->
            
            <?= $nav ?>
        </nav>
        <br />
        <ul class="breadcrumb">
            <li><a class="filAriane" href="accueil.php">Accueil</a></li>
        </ul>
        <?= $contenu ?>
        <footer>
            <center><p class="footer">Site réalisé par Gwendoline et Lauriane, étudiantes en BTS Services Informatique aux Organisations (SIO).</p></center>
        </footer>

    </body>