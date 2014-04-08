<?php $this->titre = "Votre panier"; 
require 'Vue/_Commun/barreNavigation.php'; 
$menuPanier = 1;?>

<div class="row">
    
<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
    <li class="active">Panier</li>
</ul>

<?php 
if ($articles->rowCount() == 0)
    echo "<div class='alert alert-info'>Il n'y a aucun article dans votre panier.</div>";
else { ?>

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
                    <td>$prixTotalRobe </td>
                    <td>
                        <button type='button' class='btn btn-danger' title='Supprimer' data-toggle='modal' data-target='#dlgConfirmation'>
                            <span class='glyphicon glyphicon-remove'></span>
                        </button>
                        <div class='modal fade' id='dlgConfirmation' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'>Demande de confirmation</h4>
                                    </div>
                                    <div class='modal-body'>
                                        Voulez-vous vraiment supprimer cet article ?
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Annuler</button>
                                        <a href='Panier/supprimer/". $this->nettoyer($unArticle['ROBE_ID'])." ' class='btn btn-danger'>Supprimer</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </td>
                </tr>";
                endforeach;?>
                <tr><td><strong>Total</strong></td><td></td><td></td><td><strong><?= "$prixTotal <span class='glyphicon glyphicon-euro'></span>"?></strong></td></tr>
            </table>
            
        </div></div>
        <button class="btn btn-default"><span class='glyphicon glyphicon-shopping-cart'></span> Valider</button>
    </center>
</div>
<?php } ?>