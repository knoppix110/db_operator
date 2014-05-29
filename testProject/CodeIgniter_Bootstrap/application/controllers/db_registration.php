<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_registration extends Main_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('db_search/db_registration_model');
		$this->load->helper('url');
	}

	function index()
	{
	  $data['category_list']=$this->db_registration_model->get_categories();
      $this->load->view('include/header');
      $this->load->view('db_registration',$data);
      $this->load->view('include/footer');
	}
	
	function register(){
		/*
			echo $this->input->post('display_name');
			echo $this->input->post('host_name');
			echo $this->input->post('user_name');
			echo $this->input->post('password');
			echo $this->input->post('db_name');
			echo $this->input->post('dbms');
		*/
		
		// Model呼び出し
		$this->db_registration_model->register();
		
		$this->load->view('include/header');
		$this->load->view('frontpage');
		$this->load->view('include/footer');
		
	}
}
