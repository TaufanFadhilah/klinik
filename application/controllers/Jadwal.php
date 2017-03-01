<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['jadwal'] = $this->MyModel->select_jadwal()->result_array();
		$this->load->view('admin/index',array(
		'jadwal' => $data['jadwal']
		));
	}
	
	public function input(){
		$this->load->view('admin/index');
	}
	
	public function do_input(){
		
		$data['check_extra'] = $this->MyModel->select_where('registration',array(
		'reg_date' => $_POST['date']
		))->result_array();
		
		$extra = 0;
		
		if(count($data['check_extra']) > 5){
			$extra = 1;
		}
		
		$this->MyModel->insert('schedule',array(
		'idregistration' => $_POST['id_registrasi'],
		'date_time' => $_POST['date'],
		'extra' => $extra
		));
		$this->session->set_flashdata('message', 'Insert Success');//flashdata
		redirect(base_url().'index.php/jadwal/');
		
	}
}
?>