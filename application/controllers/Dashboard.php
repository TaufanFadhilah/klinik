<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	
	public function index(){
		echo base_url();
		$this->load->view('admin/index');
	}
	
}
?>