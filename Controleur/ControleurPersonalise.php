<?php
require_once 'Framework/Controleur.php';

/**
 * Classe parente des contrôleurs soumis à authentification
 *
 */
abstract class ControleurPersonalise extends Controleur
{
    public function genererVue($donnees = array(), $action = null)
    {
       //$this->genererVue($donnees + array()));
    }
}