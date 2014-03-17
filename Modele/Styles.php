<?php

require_once 'Framework/Modele.php';

/**
 * Classe gérant les requêtes concernant les styles de robe
 */
class Style extends Modele {
    
    /**
     * Renvoi tous les styles
     * 
     * @return Tous les styles et leur nombre de lignes
     */
    public function getStyles() {
        $req = 'SELECT COUNT(rs.robe_id) AS nbContenuStyle, s.styl_id, styl_libelle '
                .'FROM t_style s left JOIN t_robe_de_soiree rs ON s.styl_id = rs.styl_id '
                .'GROUP BY styl_libelle';
        $styles = $this->executerRequete($req);
        return $styles;
    }
    
    /**
     * Renvoi les informations du style passé en paramètre
     * 
     * @param int $idStyle l'id du style recherché
     * @return array Les données liées au style recherché
     * @throws Exception Si le style recherché n'a pas été trouvé
     */
    public function getStyle($idStyle) {
        $req = "SELECT * FROM t_style WHERE styl_id=?";
        $style = $this->executerRequete($req, array($idStyle));
        if ($style->rowCount() == 1)
            return $style->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun style ne correspond à l'identifiant ".$idStyle);
    }
}