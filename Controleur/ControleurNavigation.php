<?php

    require_once 'Framework/Controleur.php';
    require_once 'Modele/Robe.php';
    
class ControleurNavigation extends Controleur {
    
    private $robe;
    
    public function __construct() {
        $this->robe = new Robe();
    }
    
    public function index() {
        if ($this->requete->existeParametre("id")) {
            $styl_id = $this->requete->getParametre("id");
            $this->afficher($styl_id);
        }
        else
            throw new Exception("Action impossible : aucun style défini");
    }
    
    // Affiche les détails sur un style
    private function afficher($styl_id) {
        $robes = $this->robe->getRobes($styl_id);
        $this->genererVue(array('robes' => $robes));
    }
}