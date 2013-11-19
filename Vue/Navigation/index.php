
<?php $this->titre = "Robes";
require 'Vue/_Commun/menuNavigation.php';
?>

<div class='row'>

    <ul class="breadcrumb">
        <li><a class="filAriane" href="index.php">Accueil</a></li>
        <li class="active"><?= $this->nettoyer($style['STYL_LIBELLE']) ?></li>
    </ul>
    <div class="marge">
        <?php if ($robes->rowCount() >= 1) {
            foreach ($robes as $robe):
                ?>
                <div class="col-sm-3 col-md-2">
                    <a class="thumbnail" href="#"><img class="robeSoiree" src="<?= 'Contenu/images/' . $this->nettoyer($robe['ROBE_IMAGE']) ?>" title="<?= $this->nettoyer($robe['ROBE_NOM']) ?>" /></a>
                        <!--<p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>-->
                </div>
            <?php
            endforeach;
        }
        else {
            echo "<div class='alert alert-info'>Aucune robe ne correspond au type de robe référencé : " . $this->nettoyer($style['STYL_ID']) . "</div>";
        }
        ?></div>
</div>

<!-- 
Site robe de mariée exemple sympa
http://www.flims-mariage.com/index.php
-->