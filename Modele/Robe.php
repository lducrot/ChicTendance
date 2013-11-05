<?php

require_once 'Framework/Modele.php';

class Robe extends Modele {
    
    public function getRobes() {
        $req = "SELECT * FROM t_robe_de_soiree";
    }
}