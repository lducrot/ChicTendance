<?php

require_once 'Controleur/ControleurPersonalise.php';
require_once 'Modele/Styles.php';
require_once 'Modele/Client.php';

/**
 * Contrôleur gérant la page d'accueil.
 * 
 */
class ControleurAccueil extends ControleurPersonalise {
    
    private $style;
    protected $client;
    
    public function __construct() {
        $this->style = new Style();
        $this->client = new Client();
    }
     
    /**
     * Génère la vue index par défaut
     */
    public function index () {
        $styles = $this->style->getStyles();
        $this->genererVue(array('styles' => $styles), 'index');
    }
}