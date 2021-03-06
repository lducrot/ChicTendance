<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Styles.php';

/**
 * Classe parente des contrôleurs soumis à authentification
 *
 */
abstract class ControleurPersonalise extends Controleur
{
    /**
     * Génère les vues.
     * 
     * @param array $donnees tableau de données venant des autres controleurs
     * @param string $action indique la page de redirection
     */
    public function genererVue($donnees = array(), $action = null)
    {
        if ($this->requete->getSession()->existeAttribut("idClient"))
        {
            $idClient = $this->requete->getSession()->getAttribut("idClient");
            $courriel = $this->requete->getSession()->getAttribut("courrielClient");
            $mdp = $this->requete->getSession()->getAttribut("mdpClient");
            $client = $this->client->getClient($courriel, $mdp);
            $nbQtePanier = $this->panier->getNbArticles($idClient);
            parent::genererVue($donnees + array('client' => $client, 'nbQtePanier' => $nbQtePanier), $action);
        }
        else
            parent::genererVue($donnees, $action);
    }
}