<?php

require_once 'Framework/Modele.php';

/**
 * Classe qui permet de construire les requetes sql concernant les robes
 */
class Robe extends Modele {
    
    private $sqlRobe = "SELECT * FROM t_robe_de_soiree rs JOIN t_style s ON rs.styl_id = s.styl_id ";
    
    /**
     * Renvoi les données des robes
     * 
     * @param int $styl_id
     * @return toutes les robes d'un style passé en paramètre
     */
    public function getRobes($styl_id) {
        $req = $this->sqlRobe . "where rs.styl_id=?";
        $robes = $this->executerRequete($req, array($styl_id));
        return $robes;
    }
    
    /**
     * Renvoi les informations d'une robe

     * @param int $robe_id
     * @return type
     * @throws Exception
     */
    public function getDetails($robe_id) {
        $req = $this->sqlRobe."JOIN t_createur cr ON cr.crea_id = rs.crea_id where robe_id=?";
        $details = $this->executerRequete($req, array($robe_id));
        if ($details->rowCount() == 1)
            return $details->fetch();
        else
            throw new Exception ("Aucune robe ne correspond à l'identifiant ".$robe_id);
    }
}