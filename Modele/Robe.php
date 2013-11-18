<?php

require_once 'Framework/Modele.php';

class Robe extends Modele {
    
    private $sqlRobe = "SELECT * FROM t_robe_de_soiree rs JOIN t_style s ON rs.styl_id = s.styl_id ";
    
    public function getRobes($styl_id) {
        $req = $this->sqlRobe . "where rs.styl_id=?";
        $robes = $this->executerRequete($req, array($styl_id));
        return $robes;
    }
}