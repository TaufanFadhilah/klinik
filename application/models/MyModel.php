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
	
	public function select_attendante($username){
		return $this->db->query("Select DATE(date) from attendance where iduser = '$username'");
		
	}
	
	public function select_not_attendante(){
		//$this->db->query("Select * from attendance where approve = 0");
		$this->db->select('*');
		$this->db->from('attendance');
		$this->db->join('user_detail', 'user_detail.iduser = attendance.iduser');
		$this->db->where('approve',0);
		return $this->db->get();
	}
	
	public function select_attendante_report(){
		$this->db->select('*');
		$this->db->from('attendance');
		$this->db->join('user_detail', 'user_detail.iduser = attendance.iduser');
		return $this->db->get();
	}
	
	public function select_registration_list(){
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->join('patient', 'patient.idpatient = registration.idpatient');
		$this->db->join('service', 'service.idservice = registration.idservice');
		$this->db->join('user_detail', 'user_detail.iduser = registration.iduser');
		return $this->db->get();
	}
	public function insert($tableName, $data){
		return $this->db->insert($tableName,$data);
	}
	
	public function update($tableName, $data, $where){
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($tableName);
	}
	
	public function delete_data($tableName, $where){
		$this->db->where($where);
		$this->db->delete($tableName);
	}
}
?>