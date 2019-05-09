<?php

class General_model extends MY_Model
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

    /**
     * cette méthode retourne l'ensemble des stations
     *
     * @return array|bool
     */
    public function Touslesstations()
    {
        $req = "SELECT * FROM station";
        $result = $this->db->query($req)->result();
        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * cette méthode traite l'ajout des desonnées
     * @param array $_dataInsert
     * @param string $_table
     * @return bool
     */
    public function AjoutDonnesEnBase($_dataInsert, $table = null)
    {
        if (is_array($_dataInsert) && !empty($_dataInsert)) {
            if (empty($table)) { // si y a pas de table envoyé en parametre, on utilisse la table private
                $table = $this->tableArticle;
            }
            $this->db->insert($table, $_dataInsert);
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
}
