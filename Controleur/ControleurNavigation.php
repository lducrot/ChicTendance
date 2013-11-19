<?php

    require_once 'Framework/Controleur.php';
    require_once 'Modele/Robe.php';
    require_once 'Modele/Styles.php';
    
class ControleurNavigation extends Controleur {
    
    private $robe;
    private $style;
    
    public function __construct() {
        $this->robe = new Robe();
        $this->style = new Style();
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
        $styles = $this->style->getStyles();
        $style = $this->style->getStyle($styl_id);
        $this->genererVue(array('robes' => $robes, 'styles' => $styles, 'style' => $style));
    }
    
    public function details() {
        if ($this->requete->existeParametre("id")) {
            $robe_id = $this->requete->getParametre("id");
            $details = $this->robe->getDetails($robe_id);
            $styles = $this->style->getStyles();
            $style = $this->style->getStyle($details['STYL_ID']);
            $this->genererVue(array('details' => $details, 'styles' => $styles, 'style' => $style));
        }
        else
            throw new Exception("Action impossible : aucune robe définie");
    }
}