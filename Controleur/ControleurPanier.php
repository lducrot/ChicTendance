<?php
require_once 'Controleur/ControleurSecurise.php';
require_once 'Modele/Client.php';
require_once 'Modele/Styles.php';
require_once 'Modele/Robe.php';
require_once 'Modele/Panier.php';

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
        if ($this->requete->getSession()->existeAttribut("idClient")) {
            $styles = $this->style->getStyles();
            $idClient = $this->requete->getSession()->getAttribut("idClient");
            $articles = $this->panier->getArticles($idClient);
            $this->genererVue(array('styles' => $styles, 'articles' => $articles));
        }
    }
    
    /**
     * Ajoute un article au panier et renvoie a la page du panier.
     */
    public function ajoutPanier() {
        if ($this->requete->existeParametre("id") && $this->requete->getSession()->existeAttribut("idClient")) {
            $idClient = $this->requete->getSession()->getAttribut("idClient");
            $idArticle = $this->requete->getParametre("id");
            $qteArticle = $this->panier->qteArticlePanier($idClient, $idArticle);
            $qteArticle = $qteArticle + 1;
            $this->panier->ajoutArticle($idClient, $idArticle, $qteArticle);
            $this->rediriger("panier");
        } else $this->rediriger ($accueil);
    }
}

?>
