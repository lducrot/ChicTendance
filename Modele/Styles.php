<?php

require_once 'Framework/Modele.php';

class Style extends Modele {
    
    public function getStyles() {
        $req = 'SELECT COUNT(rs.robe_id) AS nbContenuStyle, s.styl_id, styl_libelle '
                .'FROM t_style s left JOIN t_robe_de_soiree rs ON s.styl_id = rs.styl_id '
                .'GROUP BY styl_libelle';
        $styles = $this->executerRequete($req);
        return $styles;
    }
}
