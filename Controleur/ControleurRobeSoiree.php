<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/RobeSoiree.php';

class ControleurRobeSoiree extends Controleur {

    private $robe;

    public function __construct() {
        $this->robe = new Robe();
    }

    // Affiche la liste de toutes les robes du site
    public function index() {
        $robes = $this->robe->getRobes(1);
        $this->genererVue(array('robes' => $robes));
    }

}