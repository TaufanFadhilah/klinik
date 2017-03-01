<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	
	public function select_all($tableName){
		return $this->db->get($tableName);
	}
	
	public function select_all_limit($tableName, $limit1, $limit2 ){
		return $this->db->get($tableName,$limit1,$limit2);
	}
	
	public function select_where($tableName, $where){
		return $this->db->get_where($tableName,$where);
	}
	
	public function insert($tableName, $data){
		return $this->db->insert($tableName,$data);
	}
}
?>