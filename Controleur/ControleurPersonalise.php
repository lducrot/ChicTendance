<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Styles.php';


/**
 * Classe parente des contrôleurs soumis à authentification
 *
 */
abstract class ControleurPersonalise extends Controleur
{
    public function genererVue($donnees = array(), $action = null)
    {
        if ($this->requete->getSession()->existeAttribut("idClient"))
        {
            $courriel = $this->requete->getSession()->getAttribut("courrielClient");
            $mdp = $this->requete->getSession()->getAttribut("mdpClient");
            $client = $this->client->getClient($courriel, $mdp);
            parent::genererVue($donnees + array('client' => $client), $action);
        }
        else
            parent::genererVue($donnees, $action);
    }
}