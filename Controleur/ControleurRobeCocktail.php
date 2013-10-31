<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/RobeCocktail.php';

class ControleurRobeCocktail extends Controleur {

    private $robe;

    public function __construct() {
        $this->robe = new Robe();
    }

    // Affiche la liste de toutes les robes du site
    public function index() {
        $robes = $this->robe->getRobes(2);
        $this->genererVue(array('robes' => $robes));
    }

}