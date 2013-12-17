<?php

require_once 'Controleur/ControleurPersonalise.php';
require_once 'Modele/Client.php';
require_once 'Modele/Styles.php';

/**
 * Contrôleur gérant la connexion au site
 */
class ControleurConnexion extends ControleurPersonalise {

    private $client;
    private $style;

    public function __construct() {
        $this->client = new Client();
        $this->style = new Style();
    }

    public function index()
    {
        if ($this->requete->getSession()->existeAttribut("idClient"))
            $this->rediriger('accueil');
        else {
            $styles = $this->style->getStyles();
            $this->genererVue(array('styles' => $styles));
        }
    }

    public function connecter() {
        if ($this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");

            if ($this->client->connecter($courriel, $mdp)) {
                $client = $this->client->getClient($courriel, $mdp);
                $this->requete->getSession()->setAttribut("idClient", $client['CLIE_ID']);
                $this->requete->getSession()->setAttribut("courrielClient", $client['CLIE_COURRIEL']);
                $this->requete->getSession()->setAttribut("mdpClient", $client['CLIE_MDP']);
                $this->rediriger("accueil");
            }
            else
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'), "index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function inscription() {
        if ($this->requete->existeParametre("nom") && $this->requete->existeParametre("prenom") && $this->requete->existeParametre("adresse") && $this->requete->existeParametre("cp") && $this->requete->existeParametre("ville") && $this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
            $nom = $this->requete->getParametre("nom");
            $prenom = $this->requete->getParametre("prenom");
            $adresse = $this->requete->getParametre("adresse");
            $cp = $this->requete->getParametre("cp");
            $ville = $this->requete->getParametre("ville");
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");
            
            if (is_numeric($cp)) {
                
                $this->client->ajoutClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp);

                if ($this->client->connecter($courriel, $mdp)) {
                    $client = $this->client->getClient($courriel, $mdp);
                    $this->requete->getSession()->setAttribut("idClient", $client['CLIE_ID']);
                    $this->requete->getSession()->setAttribut("courrielClient", $client['CLIE_COURRIEL']);
                    $this->requete->getSession()->setAttribut("mdpClient", $client['CLIE_MDP']);
                    $this->rediriger("accueil");
                }
                else
                    $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'), "index");
            }
            else {
                $erreur = "Le code postale est incorrect";
                $styles = $this->style->getStyles();
                $this->genererVue(array('erreur'=> $erreur, 'styles' => $styles), 'index');
            }
        }
    }

    public function deconnecter() {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}
