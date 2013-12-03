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

    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->client->connecter($login, $mdp)) {
                $visiteur = $this->client->getClient($login, $mdp);
                $this->requete->getSession()->setAttribut("idClient",$client['clie_id']);
                $this->requete->getSession()->setAttribut("nomClient",$client['clie_nom']);
                $this->requete->getSession()->setAttribut("nomPrenom",$client['clie_prenom']);
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