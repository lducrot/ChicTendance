
<?php
$this->titre = "Connexion";
require 'Vue/_Commun/menuNavigation.php';
?>

<div class="row">
     <div class="col-md-1">
    </div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#connexion" data-toggle="tab">Connexion</a></li>
            <li><a href="#inscription" data-toggle="tab">Inscription</a></li>
        </ul>
        <br />
        <div class="tab-content">
            <!--Connexion-->
            <div class="tab-pane fade in active" id="connexion">
                <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
                    <input name="courriel" type="text" class="form-control" placeholder="Entrez votre courriel : " required autofocus><br />
                    <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe : " required><br />
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                </form>
            </div>

            <!--Inscription-->
            <div class="tab-pane fade" id="inscription">
                <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
                    <p>Veuillez remplir le formulaire suivant pour vous inscrire : </p>
                    <p><label>Nom : </label><input name="nom" type="text" class="form-control" required autofocus></p>
                    <p><label>Prénom : </label><input name="prenom" type="text" class="form-control" required></p>
                    <p><label>Adresse : </label><input name="adresse" type="text" class="form-control" required></p>
                    <p><label>Code postal : </label><input name="cp" type="text" class="form-control" required></p>
                    <p><label>Ville : </label><input name="ville" type="text" class="form-control" required></p>
                    <p><label>Courriel : </label><input name="courriel" type="mail" class="form-control" required></p>
                    <p><label>Mot de passe : </label><input name="mdp" type="password" class="form-control" required></p>
                    <br /><button type="submit" class="btn btn-default"> Inscription</button>
                </form>
            </div>
            
        </div>
    </div>
</div>

