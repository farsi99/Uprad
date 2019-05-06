<?php

class MY_Model extends CI_Model{
	
	/**
	 *  Retourne le nombre d'objet
	 *
	 *	@param array $champ	 Tableau associatif permettant de définir des conditions
	 *	@param array $valeur Tableau associatif permettant de définir des valeurs pour les conditions
	 *  @return integer    	 Le nombre d'objets satisfaisant la condition
	 */
	public function count($where = array()){ // Si $champ est un array, la variable $valeur sera ignorée par la méthode where()
		return (int) $this->db->where($where)
		->from($this->table)
		->count_all_results();
	}
	
	/**
	 * Permet de créer un objet
	 * @param unknown_type $options_echappees
	 * @param unknown_type $options_non_echappees
	 * @return boolean
	 */
	public function create($options_echappees = array(), $options_non_echappees = array()){
		//  Vérification des données à insérer
		if(empty($options_echappees) AND empty($options_non_echappees)){
			return false;
		}
		 
		return (bool) $this->db->set($options_echappees)
		->set($options_non_echappees, null, false)
		->insert($this->table);
	}
        

	/**
	 * Permet de mettre a jour un ou des objets
	 * @param unknown_type $where
	 * @param unknown_type $options_echappees
	 * @param unknown_type $options_non_echappees
	 * @return boolean
	 */
	public function update($where, $options_echappees = array(), $options_non_echappees = array()){
		//  Vérification des données à mettre à jour
		if(empty($options_echappees) AND empty($options_non_echappees)){
			return false;
		}
		 
		//  Raccourci dans le cas où on sélectionne l'id
		if(is_integer($where)){
			$where = array('id' => $where);
		}
	
		return (bool) $this->db->set($options_echappees)
		->set($options_non_echappees, null, false)
		->where($where)
		->update($this->table);
	
	}
	
	/**
	 * Permet de supprimer un ou des objets en BDD
	 * @param unknown_type $where
	 * @return boolean
	 */
	public function delete($where){
		if(is_integer($where)){
			$where = array('id' => $where);
		}
		 
		return (bool) $this->db->where($where)
		->delete($this->table);
	}
	
	/**
	 *  Retourne une liste d'objets
	 *  @param integer $nb  	Le nombre d'objets a recuperer
	 *  @param integer $debut   Nombre d'objets à sauter
	 *  @return objet       	La liste des objets
	 */
	public function get($select = '*', $where = array(), $nb = null, $debut = null, $orderBy = null, $ascOrDesc = "asc"){

		$this->db->select($select)
		->from($this->table)
		->where($where);
		
		if($nb != null){
			if($debut == null){
				$debut = 0;
			}
			$this->db->limit($nb, $debut);
		}
		
		if($orderBy != null){
			if($ascOrDesc == null){
				$ascOrDesc = "asc";
			}
			$this->db->order_by($orderBy, $ascOrDesc);
		}
		
		
		return $this->db->get()->result(get_class($this));
	}
	
	/**
	 *  Retourne l'objet dont l'id est passé en paramètre
	 *s
	 *  @param array $_id  	id(s) de l'objet à récupérer
	 *  @return objet       	objet
	 */
	public function getById($_ids){
		if(isset($_ids) && !empty($_ids)){
				
			$items = $this->db->select('*')
			->from($this->table)
			->where($_ids)
			->limit(1)
			->get()
			->result(get_class($this));
				
			if(count($items) > 0){
				return $items[0];
			}			
		}
	}
	
	/**
	 *  Retourne l'objet dont le (ou les) id(s) est(sont) pass�(s) en param�tre(s)
	 *
	 *  @param array $_ids  	ids des objets a recuperer
	 *  @return objet       	objet
	 */ 
	public function getByIds($_ids){
		if(isset($_ids) && !empty($_ids)){
	
			$items = $this->db->select('*')
			->from($this->table)
			->where('id IN ('.implode(",",$_ids).')')
			->get()
			->result(get_class($this));
	
			return $items;
	
		}
	}
        
        /**
	 * Cette méthode retourne l'id d'un pole ou domaine en fonction du liebble rout passé en parametre
	 * @param string $_LibelleRoute libellé-route du pole ou domaine
	 * @return int|null
	 */
	public function getLibelleRoute($_table,$_select, $_LibelleRoute) {
              	$query = "
			SELECT 
                           $_select
                        FROM 
                           $_table
                        WHERE 
                          libelle_route = ?
		";
		$result = $this->db->query($query,array($_LibelleRoute));
 		if ($result->num_rows()>0){
                    return $result->result()[0]->id;
                }else {
                   return Null;
                }
 	}

      	
}