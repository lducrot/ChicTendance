<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Client.php';
require_once 'Modele/Styles.php';

/**
 * Contrôleur gérant la connexion au site
 */
class ControleurConnexion extends Controleur {

    private $client;
    private $style;

    public function __construct() {
        $this->client = new Client();
        $this->style = new Style();
    }

    public function index() {
        $styles = $this->style->getStyles();
        $this->genererVue(array('styles' => $styles));
    }

    public function connecter() {
        if ($this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");

            if ($this->client->connecter($courriel, $mdp)) {
                $client = $this->client->getClient($courriel, $mdp);
                $this->requete->getSession()->setAttribut("idClient", $client['CLIE_ID']);
                $this->requete->getSession()->setAttribut("courrielClient", $client['CLIE_COURRIEL']);
                $this->rediriger("accueil");
            }
            else
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'), "index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter() {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}