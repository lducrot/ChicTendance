<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <!-- Partie de la barre toujours affichee -->
    <div class="navbar-header">
        <!-- Bouton affiché a droite si la zone d'affichage est trop petite -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Activer la navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Lien de retour à la page d'accueil -->
        <a class="titreEnTete" href="index.php">Chic Tendance</a>
    </div>
    <!-- Partie de la barre masquée en fonction de la zone d'affichage -->
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php
            foreach ($styles as $unStyle): 
                $menu = "<li class='navPrincipal'><a href='navigation/index/" 
                    .$this->nettoyer($unStyle['styl_id']) . "'> " . $this->nettoyer($unStyle['styl_libelle']) 
                    . " <span class='badge'>" . $this->nettoyer($unStyle['nbContenuStyle']) . "</span></a></li>";
                if (isset($style['STYL_ID'])) {
                    if ($unStyle['styl_id'] == $style['STYL_ID'] || isset($menuPanier)) {
                        $menu = str_replace("navPrincipal", "navPrincipalActive", $menu);
                        echo $menu;
                    } else {
                        echo $menu;
                    }
                } else {
                    echo $menu;
                }
            endforeach;
            
            if (isset($client)) {
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenue, <?= $this->nettoyer($client['CLIE_PRENOM']) ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="client">Informations personnelles</a></li>
                        <li><a href="connexion/deconnecter">Déconnexion</a></li>
                    </ul>
                </li>
                
                <li><a href="panier/index">Panier <span class='badge'><?= $this->nettoyer($nbQtePanier) ?></span></a></li>
                
                <?php
            } else {
                ?>
                <li><a class="enTete" href="connexion">Se Connecter</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
</header>
