
<?php $this->titre = "Robes"; 
require 'Vue/_Commun/navigation.php'; ?>

<div class='row'>

    <?php foreach ($robes as $robe): ?>

        <div class="col-sm-4 col-md-3">
            <div class="thumbnail">
                <a class="thumbnail" href="#"><img class="robeSoiree" src="<?= 'Contenu/images/' . $robe['ROBE_IMAGE'] ?>" title="<?= $robe['ROBE_NOM'] ?>" /></a>
                <div class="caption">
                    <h4><?= $robe['ROBE_NOM'] ?></h4>
                    <?= $robe['ROBE_PRIX'] ?>
                    <p><a href="#" class="btn btn-primary">Voir détails</a> <a href="#" class="btn btn-default">Panier</a></p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>