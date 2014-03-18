<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Modele/Robe.php';
require_once 'Modele/Styles.php';
require_once 'Modele/Client.php';

/**
 * Contrôleur gérant la navigation dans les styles
 */
class ControleurNavigation extends ControleurPersonalise {
    
    private $robe;
    private $style;
    protected $client;
    
    public function __construct() {
        $this->robe = new Robe();
        $this->style = new Style();
        $this->client = new Client();
    }
     
    /**
     * Génère la vue index par défaut.
     */
    public function index() {
        if ($this->requete->existeParametre("id")) {
            $styl_id = $this->requete->getParametre("id");
            $style = $this->style->getStyle($styl_id);
            $robes = $this->robe->getRobes($styl_id);
            $styles = $this->style->getStyles();
            $this->genererVue(array('robes' => $robes, 'styles' => $styles, 'style' => $style));
        }
        else
            throw new Exception("Action impossible : aucun style défini");
    }
    
    /**
     * Affiche les détails d'une robe
     */
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
