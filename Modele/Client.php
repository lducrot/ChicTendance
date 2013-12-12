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
            return $client;
        else
            throw new Exception ("L'utilisateur n'a pas été reconnu");
    }
}
