
<?php $this->titre = "Robes"; 
require 'Vue/_Commun/navigation.php'; ?>

<div class='row'>

    <ul class="breadcrumb">
        <li><a class="filAriane" href="index.php">Accueil</a></li>
        <li class="active"><?= $this->nettoyer($style['styl_libelle']) ?></li>
    </ul>
    
    <?php foreach ($robes as $robe): ?>
        <div class="col-sm-3 col-md-1">
            <div class="thumbnail">
                <a class="thumbnail" href="#"><img class="robeSoiree" src="<?= 'Contenu/images/' . $this->nettoyer($robe['ROBE_IMAGE']) ?>" title="<?= $this->nettoyer($robe['ROBE_NOM']) ?>" /></a>
               
                    <!--<p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>-->
                
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- 
Site robe de mariée exemple sympa
http://www.flims-mariage.com/index.php
-->