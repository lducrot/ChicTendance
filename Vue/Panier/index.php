<?php $this->titre = "Votre panier"; 
require 'Vue/_Commun/menuNavigation.php'; 
require 'Vue/_Commun/barreNavigation.php'; ?>

<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
    <li class="active">Panier</li>
</ul>

<div class="row">
    <center><div class="tableauPanier">
        <div class="panel panel-default">
        
            <table class="table">
                <tr>
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                </tr>
                <?php 
                $prixTotal = 0;
                foreach($articles as $unArticle) :
                    $prixTotalRobe = ($unArticle['ARTPAN_QTECDE'])*($unArticle['ROBE_PRIX']);
                    $prixTotal += $prixTotalRobe;
                echo "<tr>
                    <td><a href='Navigation/details/".$this->nettoyer($unArticle['ROBE_ID'])."'>".$this->nettoyer($unArticle['ROBE_NOM'])."</a></td>
                    <td>".$this->nettoyer($unArticle['ARTPAN_QTECDE'])."</td>
                    <td>".$this->nettoyer($unArticle['ROBE_PRIX'])."</td>
                    <td>$prixTotalRobe</td>
                </tr>";        
                endforeach;?>
                <tr><td></td><td></td><td></td><td><strong><?= $prixTotal?></strong></td></tr>
            </table>
        </div></div>
    </center>
        
</div>