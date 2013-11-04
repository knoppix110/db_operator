<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sql_registration extends Main_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('db_search/sql_registration_model');
		$this->load->helper('url');
	}

	function index()
	{
      $this->load->view('include/header');
      $this->load->view('sql_registration');
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
		$this->sql_registration_model->register();
		
		$this->load->view('include/header');
		$this->load->view('frontpage');
		$this->load->view('include/footer');
		
	}
}