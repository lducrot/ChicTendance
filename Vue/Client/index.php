<?php $this->titre = "Chic Tendance"; 
require 'Vue/_Commun/menuNavigation.php'; 
require 'Vue/_Commun/barreNavigation.php'; ?>

<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
</ul>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <form method="post" action="client/modifier">
            <center><h2 class='navPrincipal'>Informations Personnelles</h2></center>
            <p><label>Nom : </label><input value="<?= $this->nettoyer($client['CLIE_NOM']) ?>" name="nom" type="text" class="form-control" required autofocus></p>
            <p><label>Prénom : </label><input  value="<?= $this->nettoyer($client['CLIE_PRENOM']) ?>"name="prenom" type="text" class="form-control" required></p>
            <p><label>Adresse : </label><input  value="<?= $this->nettoyer($client['CLIE_ADRESSE']) ?>"name="adresse" type="text" class="form-control" required></p>
            <p><label>Code postal : </label><input  value="<?= $this->nettoyer($client['CLIE_CP']) ?>"name="cp" type="text" class="form-control" required></p>
            <p><label>Ville : </label><input  value="<?= $this->nettoyer($client['CLIE_VILLE']) ?>"name="ville" type="text" class="form-control" required></p>
            <p><label>Courriel : </label><input  value="<?= $this->nettoyer($client['CLIE_COURRIEL']) ?>"name="courriel" type="email" class="form-control" required></p>
            <p><label>Mot de passe : </label><input  value="<?= $this->nettoyer($client['CLIE_MDP']) ?>"name="mdp" type="password" class="form-control" required></p>
            <br /><button type="submit" class="btn btn-default"> Modifier</button>
        </form>
    </div>
</div>