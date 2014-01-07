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
            <center><h2 class='titreDetail'>Informations Personnelles</h2></center>
            <p><label>Nom : </label></p><input value="<?= $this->nettoyer($client['CLIE_NOM']) ?>" name="nom" type="text" class="form-control" required autofocus><br />
            <p><label>Prénom : </label></p><input  value="<?= $this->nettoyer($client['CLIE_PRENOM']) ?>"name="prenom" type="text" class="form-control" required><br />
            <p><label>Adresse : </label></p><input  value="<?= $this->nettoyer($client['CLIE_ADRESSE']) ?>"name="adresse" type="text" class="form-control" required><br />
            <p><label>Code postal : </label></p><input  value="<?= $this->nettoyer($client['CLIE_CP']) ?>"name="cp" type="text" class="form-control" required><br />
            <p><label>Ville : </label></p><input  value="<?= $this->nettoyer($client['CLIE_VILLE']) ?>"name="ville" type="text" class="form-control" required><br />
            <p><label>Courriel : </label></p><input  value="<?= $this->nettoyer($client['CLIE_COURRIEL']) ?>"name="courriel" type="email" class="form-control" required><br />
            <p><label>Mot de passe : </label></p><input  value="<?= $this->nettoyer($client['CLIE_MDP']) ?>"name="mdp" type="password" class="form-control" required><br />
            <br /><button type="submit" class="btn btn-default"> Modifier</button>
        </form>
    </div>
</div>