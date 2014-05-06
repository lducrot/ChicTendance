<?php

require_once 'Controleur/ControleurPersonalise.php';

/**
 * Classe parente des contrôleurs soumis à authentification.
 *
 */
abstract class ControleurSecurise extends ControleurPersonalise
{
    /**
     * Vérifie si les informations utilisateur sont présents dans la session
     * Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
     * 
     * @param string $action indique la page de redirection
     */
    public function executerAction($action)
    {
        if ($this->requete->getSession()->existeAttribut("idClient")) {
            parent::executerAction($action);
   
        }
        else {
            $this->rediriger("connexion");
        }
    }
}