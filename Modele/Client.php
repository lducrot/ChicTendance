<?php

require_once 'Framework/Modele.php';

class Client extends Modele {
    
    private $sqlClient = "SELECT * FROM t_client ";
    
    public function connecter($courriel, $mdp)
    {
        $sql = "select clie_id from t_client where clie_courriel=? and clie_mdp=?";
        $client = $this->executerRequete($sql, array($courriel, $mdp));
        return ($client->rowCount() == 1);
    }
    
    public function getClient($courriel, $mdp) {
        $req = $this->sqlClient . "where clie_courriel=? and clie_mdp=?";
        $client = $this->executerRequete($req, array($courriel, $mdp));
        if ($client->rowCount() == 1)
            return $client->fetch();
        else
            throw new Exception ("L'utilisateur n'a pas été reconnu");
    }
    
    //Ajoute un client
    public function  AjouteClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
        $sql = "insert into t_client (CLIE_NOM, CLIE_PRENOM, CLIE_ADRESSE, CLIE_CP, CLIE_VILLE, CLIE_COURRIEL, CLIE_MDP) values (?, ?, ?, ?, ?, ?, ?);";
        $ajoutClient = $this->executerRequete($sql, array($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp));
        return $ajoutClient;
    }
}
