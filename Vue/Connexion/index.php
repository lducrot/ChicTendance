
<?php
$this->titre = "Connexion";
require 'Vue/_Commun/menuNavigation.php';
?>

<div class="row">
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
                    <input name="courriel" type="text" class="form-control" placeholder="Entrez votre courriel" required autofocus><br />
                    <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe" required><br />
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                </form>
            </div>

            <!--Inscription-->
            <div class="tab-pane fade in active" id="inscription">
                <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
                    <label>Entrez votre nom : </label><input name="nom" type="text" class="form-control" required autofocus><br />
                    <label>Entrez votre prénom : </label><input name="prenom" type="text" class="form-control" required><br />
                    <label>Entrez votre adresse : </label><input name="adresse" type="text" class="form-control" required><br />
                    <label>Entrez votre code postal : </label><input name="cp" type="text" class="form-control" required><br />
                    <label>Entrez votre ville : </label><input name="ville" type="text" class="form-control" required><br />
                    <label>Entrez votre courriel : </label><input name="courriel" type="mail" class="form-control" required><br />
                    <label>Entrez votre mot de passe : </label><input name="mdp" type="password" class="form-control" required><br />
                    <button type="submit" class="btn btn-default"> Inscription</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
