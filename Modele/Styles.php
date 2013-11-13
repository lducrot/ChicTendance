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
    
    public function getStyle($idStyle) {
        $req = "SELECT styl_id, styl_libelle FROM t_style WHERE styl_id=?";
        $style = $this->executerRequete($req, array($idStyle));
        if ($style->rowCount() == 1)
            return $style->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun style ne correspond à l'identifiant '$style'");
    }
}
