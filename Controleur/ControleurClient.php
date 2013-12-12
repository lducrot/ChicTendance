<?php

require_once 'Modele/Client.php';

/**
 * Contrôleur gérant la connexion au site
 *
 */
class ControleurClient extends ControleurSecurise
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
        $this->genererVue(array('idClient' => $client['idClient'], 'nomClient' => $client['nomClient'], 
            'prenomClient' => $client['prenomClient'], 'adresseClient' => $client['adresseClient'], 
            'cpClient' => $client['cpClient'], 'villeClient' => $client['villeClient'], 
            'courrielClient' => $client['courrielClient'], 'mdpClient' => $client['mdpClient'], 'style' => $styles));
    }
}