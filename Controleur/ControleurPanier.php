<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurPanier
 *
 * @author ggome
 */
class ControleurPanier extends ControleurSecurise {
    //put your code here
    
    private $robe;
    private $style;
    protected $client;
    private $panier;
    
    public function __construct() {
        $this->robe = new Robe();
        $this->style = new Style();
        $this->client = new Client();
        $this->panier = new Panier();
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
}

?>
