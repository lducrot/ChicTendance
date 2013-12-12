<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Styles.php';

class ControleurAccueil extends Controleur {
    
    private $style;
    
    public function __construct() {
        $this->style = new Style();
    }
    
    public function index () {
        $styles = $this->style->getStyles();
        $this->genererVue(array('styles' => $styles));
        
    }
    
}