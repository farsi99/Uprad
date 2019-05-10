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
     * @param integer $_idtype  //definir si c'est une page ou actualité
     * @return array|bool
     */
    public function Touslesactualites($_idstation = null, $_idtype)
    {
        if (!empty($_idtype) && is_numeric($_idtype)) {
            $where = "";
            if (is_numeric($_idstation) && !empty($_idstation)) {
                $where .= "AND station_id = $_idstation";
            }
            $req = "SELECT * FROM $this->tableArticle WHERE article_type_id=$_idtype $where";
            $result = $this->db->query($req)->result();
            if (!empty($result)) {
                return $result;
            } else {
                return null;
            }
        } else {
            return false;
        }
    }


    /**
     * cette méthode retourne une valeur unique d'une données
     * @param integer $_id
     * @param string $_table
     * @return array|bool
     */
    public function AfficherUnArticle($_id, $_table)
    {
        if (!empty($_id) && is_numeric($_id) && !empty($_table)) {
            $req = "SELECT * FROM $_table WHERE id=$_id";
            $result = $this->db->query($req)->result();
            if (!empty($result)) {
                return $result[0];
            }
        } else {
            return false;
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



    /**
     * cette méthode traite la modification des données de l'espaceaef, trombi ou infographie
     * @param int $_id identifiant du document
     * @param array $_dataUpdate données pour modifier
     * @param string $_table nom de la table
     * @return array|bool 
     */
    public function ModifierDonnesEnBase($_id, $_data, $_table)
    {
        if (isset($_id) && is_numeric($_id) && is_array($_data) && !empty($_table)) {
            $this->db->where('id', $_id);
            $result = $this->db->update($_table, $_data);
            log_message('Error', 'Req: ' . $this->db->last_query());
            return $result;
        } else {
            return false;
        }
    }


    /**
     * Suppression des données de la base
     * @param int $_id identifiant 
     * @return bool
     */
    public function SupprimerLesDonnes($_id, $_table)
    {
        if (isset($_id) && is_numeric($_id) && !empty($_table)) {
            $query = "DELETE FROM $_table WHERE id=$_id";
            $this->db->query($query);
            return true;
        } else {
            return false;
        }
    }
}
