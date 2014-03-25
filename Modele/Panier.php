<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author ggome
 */
class Panier {
    private $sqlPanier = "SELECT * FROM t_article_panier tap JOIN t_robe_de_soiree trs ON tap.artpan_idrobe = robe_id JOIN";
    
    /**
     * Recherhe les articles du panier dans la bdd
     * 
     * @param int $idClient l'identifiant du client connecté
     * @return vrai si le client dont le courriel et le mdp ont été saisis est trouvé sinon retourne faux
     */
    public function getArticles($idClient)
    {
        $sql = $this->sqlPanier . "where artpan_idclie=?;";
        $articles = $this->executerRequete($sql, array($idClient));
        return ($articles);
    }
    
    /**
     * Ajout d'un article dans le panier
     * 
     * @param int $idClient id du client connecté
     * @param int $idArticle id de l'article à ajouter dans le panier
     * @param int $qteArticle quantité demandée par le client
     * @return null si la requête échoue
     */
    public function  ajoutArticle($idClient, $idArticle, $qteArticle) {
        $sql = "insert into t_article_panier (artpan_idrobe, artpan_idclie, artpan_qtecde) values (?, ?, ?);";
        $ajoutArticle = $this->executerRequete($sql, array($idClient, $idArticle, $qteArticle));
        return $ajoutArticle;
    }
    
    /**
     * Vérifie l'existance d'un courriel dans la bdd
     * 
     * @param int $idClient id du client connecté
     * @param int $idArticle id de l'article à chercher
     * @return int $qteCde quantité enregistrée dans le panier pour un article
     */
    public function qteArticlePanier($idClient, $idArticle) {
        $sql = "select artpan_qtecde from t_article_panier where artpan_idclie=? and artpan_idrobe=?";
        $nbCourriel = $this->executerRequete($sql, array($idClient, $idArticle));
        $qteCde = 0;
        if ($nbCourriel->rowCount() == 1)
            $qteCde = $nbCourriel;
        return $qteCde;
    }
}

?>
