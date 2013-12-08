
<?php $this->titre = "Chic Tendance"; 
require 'Vue/_Commun/menuNavigation.php'; ?>

<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
</ul>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-11">
        <h3>Informations personnelles</h3>
        <label>Votre nom : </label><input name="nom" type="text" class="form-control" required />
        <label>Votre prénom : </label><input name="prenom" type="text" class="form-control" required />
        <label>Votre adresse : </label><input name="adresse" type="text" class="form-control" required />
        <label>Votre code postal : </label><input name="cp" type="text" class="form-control" required />
        <label>Votre ville : </label><input name="ville" type="text" class="form-control" required />
        <label>Votre courriel : </label><input name="courriel" type="text" class="form-control" required />
        <label>Votre mot de passe : </label><input name="mdp" type="text" class="form-control" required />
    </div>
</div>

