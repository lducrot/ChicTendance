<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Robe.php';
/**
 * Contrôleur des actions liées aux robes
 *
 */
class ControleurDetails extends Controleur {

    private $robe;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->robe = new Robe();
    }

    // Affiche les détails sur une robe
    public function index() {
        $idRobe = $this->requete->getParametre("id");
        
        $robe = $this->robe->getRobe($idRobe);
        
        $this->genererVue(array('robe' => $robe));
    }
}