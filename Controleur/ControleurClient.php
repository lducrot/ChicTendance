<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Modele/Client.php';
require_once 'Modele/Styles.php';

/**
 * Contrôleur gérant la connexion au site
 *
 */
class ControleurClient extends ControleurPersonalise
{
    protected $client;
    private $style;

    public function __construct()
    {
        $this->client = new Client();
        $this->style = new Style();
    }

    public function index()
    {
        if ($this->requete->getSession()->existeAttribut("idClient")) {
            $styles = $this->style->getStyles();
            $courriel = $this->requete->getSession()->getAttribut("courrielClient");
            $mdp = $this->requete->getSession()->getAttribut("mdpClient");
            $client = $this->client->getClient($courriel, $mdp);
            $this->genererVue(array('client' => $client, 'styles' => $styles));
        }
        else 
            $this->rediriger('connexion');
    }
    
    public function modifier()
    {
        if ($this->requete->getSession()->existeAttribut("idClient")) {
            if ($this->requete->existeParametre("nom")) {
                $id = $this->requete->getSession()->getAttribut("idClient");
                $nom = $this->requete->getParametre("nom");
                $prenom = $this->requete->getParametre("prenom");
                $adresse = $this->requete->getParametre("adresse");
                $cp = $this->requete->getParametre("cp");
                $ville = $this->requete->getParametre("ville");
                $courriel = $this->requete->getParametre("courriel");
                $mdp = $this->requete->getParametre("mdp");
                $styles = $this->style->getStyles();
                
                if ($nom != "" && $prenom != "" && $adresse != "" && $cp != "" && $ville != "" && $courriel != "" && $mdp != "") {
                    $modif = $this->client->modificationClient($id, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp);
                }
            }
            
            if (isset($modif))
                $this->genererVue(array('styles' => $styles));
            else
                $this->rediriger('client');
        }
        else 
            $this->rediriger('connexion');
    }
}