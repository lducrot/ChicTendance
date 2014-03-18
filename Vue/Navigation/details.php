<?php
$this->titre = $this->nettoyer($details['ROBE_NOM']);
require 'Vue/_Commun/menuNavigation.php';
require 'Vue/_Commun/barreNavigation.php';
?>

<div class="row">
    <ul class="breadcrumb">
        <li><a class="filAriane" href="index.php">Accueil</a></li>
        <li><a class="filAriane" href="navigation/index/<?= $this->nettoyer(utf8_decode($style['STYL_ID']))?>"><?= $this->nettoyer(utf8_decode($style['STYL_LIBELLE']))?></a></li>
        <li class="active"><?= $this->nettoyer(utf8_decode($details['ROBE_NOM']))?></li>
    </ul>
    <div class="marge">
    <div class="col-md-12">
        <center>
            <h1 class="titreDetail"><?= $this->nettoyer(utf8_decode($details['ROBE_NOM'])); ?></h1>
            <!--<table>
                <tr>
                    <td rowspan="2">-->
                        <img class="imgRobe" src="<?= 'Contenu/images/'.$this->nettoyer(utf8_decode($details['ROBE_IMAGE'])) ?>" title="<?= $this->nettoyer(utf8_decode($details['ROBE_NOM'])) ?>"/>
                    <!--</td>
                    <td class="RobeDetailTD">-->
                        <p class="detail">
                            Couturier : <?= $this->nettoyer(utf8_decode($details['CREA_NOM'])); ?><br />
                            Prix : <?= $this->nettoyer(utf8_decode($details['ROBE_PRIX'])); ?> €<br />
                            Date d'ajout : <?= $this->nettoyer(utf8_decode($details['ROBE_DATEAJOUT'])); ?>
                        </p><br />
                    <!--</td>
                </tr>
                <tr>
                    <td class="btnPanier" colspan="2">-->
                        <a href="#" class="btn btn-default glyphicon glyphicon-shopping-cart btnPanier"> Panier</a>
                    <!--</td>
                </tr>
            </table>-->
        </center>
    </div>
    </div>

</div>
