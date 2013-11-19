<?php
$this->titre = $details['ROBE_NOM'];
require 'Vue/_Commun/menuNavigation.php';
?>

<div class="row">
    <div class="col-md-1">
    </div>  
    <div class="col-md-8">
        <center>
            <h1 class="titreDetail"><?= $this->nettoyer($details['ROBE_NOM']); ?></h1>
            <table class="detailRobe">
                <tr>
                    <td rowspan="2">
                        <img class="imgRobeSoireeRouge" src="<?= $this->nettoyer($details['ROBE_IMAGE']); ?>" />
                    </td>
                    <td class="RobeDetailTD">
                        <p class="detail">
                            <u>Description</u> :<br /><br />
                            Couturier : <?= $this->nettoyer($details['CREA_NOM']); ?><br />
                            Prix : <?= $this->nettoyer($details['ROBE_PRIX']); ?>
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