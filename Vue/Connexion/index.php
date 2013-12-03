
<?php
$this->titre = "Connexion";
require 'Vue/_Commun/menuNavigation.php';
?>

<div class='row'>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#connexion" data-toggle="tab">Connexion</a></li>
            <li><a href="#inscription" data-toggle="tab">Inscription</a></li>
        </ul>
    </div>
    <div class="well">
        <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input name="courriel" type="text" class="form-control" placeholder="Entrez votre courriel" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                </div>
            </div>
        </form>
    </div>
</div>