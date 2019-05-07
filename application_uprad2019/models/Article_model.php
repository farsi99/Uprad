<?php

class Article_model extends MY_Model
{
    private $tableArticle = 'article';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * cette méthode retourne l'enseble des actualités avec ou sans stations
     * @param integer $_idstation //cette parametre peut etre null
     * @return array|bool
     */
    public function Touslesactualites($_idstation = null)
    {
        $where = "";
        if (is_numeric($_idstation) && !empty($_idstation)) {
            $where .= "AND station_id = $_idstation";
        }
        $req = "SELECT * FROM $this->tableArticle WHERE article_type_id=1 $where";
        $result = $this->db->query($req)->result();
        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }
}
