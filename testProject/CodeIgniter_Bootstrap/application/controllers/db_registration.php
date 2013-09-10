<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_registration extends Main_Controller
{
	function __construct() {
		parent::__construct();
	}

	function index()
	{
      $this->load->view('include/header');
      $this->load->view('db_registration');
      $this->load->view('include/footer');
	}
	
	function register(){
		echo $this->input->post('display_name');
		echo $this->input->post('input01');
//		$query = $this->db->query('');
	}
}
