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
    <div class="marge"></div>
    <div class="col-md-8">
        <center>
            <h1 class="titreDetail"><?= $this->nettoyer($details['ROBE_NOM']); ?></h1>
            <table class="detailRobe">
                <tr>
                    <td rowspan="2">
                        <img class="imgRobeSoireeRouge" src="<?= 'Contenu/images/'.$details['ROBE_IMAGE'] ?>" />
                    </td>
                    <td class="RobeDetailTD">
                        <p class="detail">
                            Couturier : <?= $this->nettoyer($details['CREA_NOM']); ?><br />
                            Prix : <?= $this->nettoyer($details['ROBE_PRIX']); ?><br />
                            Date : <?= $this->nettoyer($details['ROBE_DATEAJOUT']); ?>
                        </p>
                    </td>
                    <td class="btnPanier">
                        <a href="#" class="btn btn-default glyphicon glyphicon-shopping-cart"> Panier</a>
                    </td>
                </tr>
                <tr>
                    <td class="detailRobetr" colspan="2">
                        <!--<p>Vous avez envie de vous faire remarquer ? Cette robe extremement tendance est parfaite pour vous !</p>-->
                    </td>
                </tr>
            </table>
        </center>
    </div>

</div>