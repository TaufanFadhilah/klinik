<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patient extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function patient_list(){
		$data['patient'] = $this->MyModel->select_all('patient')->result_array();
		$this->load->view('admin/patient_list',array('patient' => $data['patient']));
	}
}

?>