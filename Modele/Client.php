<?php

require_once 'Framework/Modele.php';

class Client extends Modele {
    
    private $sqlClient = "SELECT * FROM t_client ";
    
    public function getClient($clie_courriel, $clie_mdp) {
        $req = $this->sqlRobe . "where clie_courriel='?' and clie_mdp='?'";
        $client = $this->executerRequete($req, array($clie_courriel, $clie_mdp));
        if ($client->rowCount() == 1)
            return $client;
        else
            throw new Exception ("L'utilisateur n'a pas été reconnu");
    }
}
