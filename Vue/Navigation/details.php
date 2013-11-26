<?php
$this->titre = $this->nettoyer($details['ROBE_NOM']);
require 'Vue/_Commun/menuNavigation.php';
?>

<div class="row">
    <ul class="breadcrumb">
        <li><a class="filAriane" href="index.php">Accueil</a></li>
        <li><a class="filAriane" href="navigation/index/<?= $this->nettoyer($style['STYL_ID'])?>"><?= $this->nettoyer($style['STYL_LIBELLE'])?></a></li>
        <li class="active"><?= $this->nettoyer($details['ROBE_NOM'])?></li>
    </ul>
    <div class="marge">
    <div class="col-md-12">
        <center>
            <h1 class="titreDetail"><?= $this->nettoyer($details['ROBE_NOM']); ?></h1>
            <table class="detailRobe">
                <tr>
                    <td rowspan="2">
                        <img class="imgRobe" src="<?= 'Contenu/images/'.$details['ROBE_IMAGE'] ?>" />
                    </td>
                    <td class="RobeDetailTD">
                        <p class="detail">
                            Couturier : <?= $this->nettoyer($details['CREA_NOM']); ?><br />
                            Prix : <?= $this->nettoyer($details['ROBE_PRIX']); ?> €<br />
                            Date d'ajout : <?= $this->nettoyer($details['ROBE_DATEAJOUT']); ?>
                        </p><br />
                        
                    </td>
                </tr>
                <tr>
                    <td class="btnPanier" colspan="2">
                        <a href="#" class="btn btn-default glyphicon glyphicon-shopping-cart btnPanier"> Panier</a>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    </div>

</div>