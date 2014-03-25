<?php $this->titre = "Votre panier"; 
require 'Vue/_Commun/menuNavigation.php'; 
require 'Vue/_Commun/barreNavigation.php'; ?>

<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
    <li class="active">Panier</li>
</ul>

<div class="row">
    <table>
        <tr>
            <th>Nom</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        <tr>
            <td><?= $this->nettoyer($styles['STYL_LIBELLE']) ?></td>
        </tr>
    </table>
        
</div>