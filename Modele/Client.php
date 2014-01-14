<?php
require_once 'Framework/Modele.php';

/**
 * Classe qui permet de construire les requetes sql concernant les clients
 */
class Client extends Modele {
    
    private $sqlClient = "SELECT * FROM t_client ";
    
    /**
     * Recherhe le client dans la bdd
     * 
     * @param string $courriel
     * @param string $mdp
     * @return vrai si le client dont le courriel et le mdp ont été saisis est trouvé sinon retourne faux
     */
    public function connecter($courriel, $mdp)
    {
        $sql = "select clie_id from t_client where clie_courriel=? and clie_mdp=?";
        $client = $this->executerRequete($sql, array($courriel, $mdp));
        return ($client->rowCount() == 1);
    }
    
    /**
     * Renvoi les données du client
     * 
     * @param string $courriel
     * @param string $mdp
     * @return toutes les informations concerant le client dont le courriel et le mdp sont passé en paramètre
     * @throws Exception si l'utilisateur est inconnu
     */
    public function getClient($courriel, $mdp) {
        $req = $this->sqlClient . "where clie_courriel=? and clie_mdp=?";
        $client = $this->executerRequete($req, array($courriel, $mdp));
        if ($client->rowCount() == 1)
            return $client->fetch();
        else
            throw new Exception ("L'utilisateur n'a pas été reconnu");
    }
    
    /**
     * Ajout d'un client dans la bdd
     * 
     * @param string $nom
     * @param string $prenom
     * @param string $adresse
     * @param string $cp
     * @param string $ville
     * @param string $courriel
     * @param string $mdp
     * @return le résultat de la requete
     */
    public function  ajoutClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
        $sql = "insert into t_client (CLIE_NOM, CLIE_PRENOM, CLIE_ADRESSE, CLIE_CP, CLIE_VILLE, CLIE_COURRIEL, CLIE_MDP) values (?, ?, ?, ?, ?, ?, ?);";
        $ajoutClient = $this->executerRequete($sql, array($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp));
        return $ajoutClient;
    }
    
    /**
     * Met à jour les données du client
     * 
     * @param int $id
     * @param string $nom
     * @param string $prenom
     * @param string $adresse
     * @param string $cp
     * @param string $ville
     * @param string $courriel
     * @param string $mdp
     * @return la mise à jour des données passée en paramètre
     */
    public function modificationClient($id, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
        $sql = "update t_client set clie_nom=?, clie_prenom=?, clie_adresse=?, clie_cp=?, clie_ville=?, clie_courriel=?, clie_mdp=? where clie_id=?;";
        $modificationClient = $this->executerRequete($sql, array($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp, $id));
        return $modificationClient;
    }
    
    /**
     * Vérifie l'existance d'un courriel dans la bdd
     * 
     * @param string $courriel
     * @return boolean vrai si le courriel est connu faux si il est inconnu
     */
    public function existeCourriel($courriel) {
        $sql = "select clie_id from t_client where clie_courriel=?";
        $nbCourriel = $this->executerRequete($sql, array($courriel));
        $existe = false;
        if ($nbCourriel->rowCount() == 1)
            $existe = true;
        return $existe;
    }
}
