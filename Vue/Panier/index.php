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
                <?php foreach($articles as $unArticle) :
                echo "<tr>
                    <td>".$this->nettoyer($unArticle['ROBE_NOM'])."</td>
                    <td>".$this->nettoyer($unArticle['ARTPAN_QTECDE'])."</td>
                    <td>".$this->nettoyer($unArticle['ROBE_PRIX'])."</td>
                    <td>".$this->nettoyer($unArticle['ARTPAN_QTECDE'])*$this->nettoyer($unArticle['ROBE_PRIX'])."</td>
                </tr>";        
                endforeach;?>
            </table>
        </div></div>
    </center>
        
</div>