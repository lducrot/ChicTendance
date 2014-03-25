<?php
require_once 'Framework/Modele.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author ggome
 */
class Panier extends Modele {
    private $sqlPanier = "SELECT * FROM t_article_panier tap JOIN t_robe_de_soiree trs ON tap.artpan_idrobe = robe_id ";
    
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
        if ($qteArticle == 1) {
            $sql = "insert into t_article_panier (artpan_idrobe, artpan_idclie, artpan_qtecde) values (?, ?, ?);";
            $ajoutArticle = $this->executerRequete($sql, array($idArticle, $idClient, $qteArticle));
        } else {
            $sql = "update t_article_panier set artpan_qtecde=? where artpan_idrobe=? and artpan_idclie=?;";
            $ajoutArticle = $this->executerRequete($sql, array($qteArticle, $idArticle, $idClient));
        }
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
        $reqQtecde = $this->executerRequete($sql, array($idClient, $idArticle));
        $qteCde = 0;
        if ($reqQtecde->rowCount() == 1) {
            $nbQtecde = $reqQtecde->fetch();
            $qteCde = $nbQtecde['artpan_qtecde'];
        }
        return $qteCde;
    }
    
    public function getNbArticles($idClient) {
        $sql = "select sum(artpan_qtecde) as nbArticle from t_article_panier where artpan_idclie=?";
        $nbArticle = $reqNbArticle->fetch();
        return $nbArticle['nbArticle'];
    }
}

?>
