
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
                    <input name="courriel" type="email" class="form-control" placeholder="Entrez votre courriel : " required autofocus><br />
                    <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe : " required><br />
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                </form>
            </div>

            <!--Inscription-->
            <div class="tab-pane fade" id="inscription">
                <form class="form-signin form-horizontal" role="form" action="connexion/inscription" method="post">
                    <p>Veuillez remplir le formulaire suivant pour vous inscrire : </p>
                    <p><label>Nom<span class="obligatoire">*</span> : </label></p><input name="nom" type="text" class="form-control" required autofocus><br />
                    <p><label>Prénom<span class="obligatoire">*</span> : </label></p><input name="prenom" type="text" class="form-control" required><br />
                    <p><label>Adresse<span class="obligatoire">*</span> : </label></p><input name="adresse" type="text" class="form-control" required><br />
                    <p><label>Code postal<span class="obligatoire">*</span> : </label></p><input name="cp" type="text" class="form-control" required><br />
                    <p><label>Ville<span class="obligatoire">*</span> : </label></p><input name="ville" type="text" class="form-control" required><br />
                    <p><label>Courriel<span class="obligatoire">*</span> : </label></p><input name="courriel" type="email" class="form-control" required><br />
                    <p><label>Mot de passe<span class="obligatoire">*</span> : </label></p><input name="mdp" type="password" class="form-control" required><br />
                    <br /><button type="submit" class="btn btn-default"> Inscription</button>
                    <br /><p class="obligatoire"><span >Les champs suivi de * sont obligatoires.</span></p>
                    <?php if (isset ($erreur)) echo "<div class='alert alert-danger'> $erreur </div>"; ?>
                </form>
            </div>
            
        </div>
    </div>
</div>

