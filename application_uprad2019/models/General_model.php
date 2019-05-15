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
     * @param integer $_limite
     * @param integer $_etat
     * @return array|bool
     */
    public function Touslesactualites($_idstation = null, $_idtype, $_limite = null, $_etat = null)
    {
        $limite = "";
        if (!empty($_limite) && is_numeric($_limite)) {
            $limite .= "LIMIT $_limite";
        }
        if (!empty($_idtype) && is_numeric($_idtype)) {
            $where = "";
            if (is_numeric($_idstation) && !empty($_idstation)) {
                $where .= "AND station_id = $_idstation";
            }
            if (!empty($_etat) && is_numeric($_etat)) {
                $where .= " AND status =$_etat";
            }
            $req = "SELECT * FROM $this->tableArticle WHERE article_type_id=$_idtype $where ORDER BY id DESC $limite";
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
     * cette méthode retourne un ensemble des données 
     * @param string $_table
     * @param integer $_etat
     * @return array|bool
     */
    public function AfficherDesDonnes($_table, $_etat = null)
    {
        $where = "";
        if (isset($_etat) && is_numeric($_etat)) {
            $where .= "WHERE etat=$_etat";
        }
        if (!empty($_table)) {
            $req = "SELECT * FROM $_table $where ORDER BY id";
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
    public function AfficherUneDonnes($_id, $_table)
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
     * cette méthode retourne l'ensemble des stations ou les station selon un article
     * @return array|bool
     */
    public function Touslesstations()
    {
        $req = "SELECT * FROM station ";
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
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Suppression des données de la base
     * @param integer $_id identifiant 
     * @param integer $_idtype //en cas d'article, ça distingue quelle type d'article ou null si c'est pas un article
     * @return bool
     */
    public function SupprimerLesDonnes($_id, $_table, $_idtype = null)
    {
        $where = "";
        if (isset($_id) && is_numeric($_id) && !empty($_table)) {
            if (!empty($_idtype) && $_table == "article") {
                $where .= "AND article_type_id=$_idtype";
            }
            $query = "DELETE FROM $_table WHERE id=$_id $where";
            $this->db->query($query);
            return true;
        } else {
            return false;
        }
    }


    /**
     * cette méthode retourne l'ensemble des stations ou les station selon un article
     *@param int $_idarticle //qui peut etre null
     * @return array|bool
     */
    public function StationsLies($_idarticle = null)
    {
        $where = "";
        if (!empty($_idarticle) && is_numeric($_idarticle)) {
            $where .= " WHERE ass.id_article = $_idarticle";
        }
        $req = "SELECT s.id,s.libelle FROM station s
        INNER JOIN `ass-station-article` ass  ON ass.id_station = s.id 
        $where";
        $result = $this->db->query($req)->result();
        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * cette méthode est une exception permetant de supprimer les station
     * @param array $_idstations
     * */
    public function EnleverDesStation($_idstations)
    {
        if (is_array($_idstations) && !empty($_idstations)) {
            foreach ($_idstations as $_idstation) {
                $req = "DELETE FROM `ass-station-article` WHERE id_station=$_idstation ";
                $this->db->query($req);
                log_message('Error', 'Supprimer:' . $this->db->last_query());
            }
        }
    }

    /**
     * Cette méthode traite l'authentifiaction des abonnées avec son email et son mot de passe passés en paramere et met toutes ses infos en sessions ()
     * @param string $_username identifiant ou email de l'utilisateur
     * @param string $_password password de l'utilisateur
     * @return bool true si c'est bon ou false si erreur
     */
    public function authentification($_username, $_password)
    {
        if (empty($_username) || empty($_password)) {
            return false;
        } else {
            $query = "SELECT a.*,m.nom,m.prenom,m.photo FROM admin a 
					JOIN membre m ON m.id = a.membre_id                                 
					WHERE a.email =?
                    GROUP BY a.id";
            $result = $this->db->query($query, array($_username));
            if ($result->num_rows() > 0) {
                $donnes = $result->result();
                foreach ($donnes as $user) {
                    if ($user->password === sha1($_password)) {
                        //on ajout les données en session
                        $session_data = array(
                            'username' => $user->id,
                            'logged_in' => true,
                            'nom' => $user->nom,
                            'prenom' => $user->prenom,
                            'email' => $user->email,
                            'photo' => $user->photo
                        );
                        $this->session->set_userdata($session_data);
                        return $session_data;
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
            }
        }
    }
}
