<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Client.php';

/**
 * Contrôleur gérant la connexion au site
 *
 */
class ControleurConnexion extends Controleur
{
    private $client;
    private $style;

    public function __construct()
    {
        $this->client = new Client();
        $this->style = new Style();
    }

    public function index()
    {
        $styles = $this->style->getStyles();
        $this->genererVue(array('style' => $style));
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->client->connecter($courriel, $mdp)) {
                $client = $this->client->getClient($courriel, $mdp);
                $this->requete->getSession()->setAttribut("idClient",$client['clie_id']);
                $this->requete->getSession()->setAttribut("nomClient",$client['clie_prenom']);
                $this->requete->getSession()->setAttribut("prenomClient",$client['clie_prenom']);
                $this->requete->getSession()->setAttribut("adresseClient",$client['clie_adresse']);
                $this->requete->getSession()->setAttribut("cpClient",$client['clie_cp']);
                $this->requete->getSession()->setAttribut("villeClient",$client['clie_ville']);
                $this->requete->getSession()->setAttribut("courrielClient",$client['clie_courriel']);
                $this->requete->getSession()->setAttribut("mdpClient",$client['clie_mdp']);
                $this->rediriger("accueil");
            }
            else
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'),"index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }
}