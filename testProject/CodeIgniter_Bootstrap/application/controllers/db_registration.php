<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_registration extends Main_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('db_search/db_info_model');
		$this->load->model('db_search/authority_for_db_model');
	}

	function index()
	{
      $this->load->view('include/header');
      $this->load->view('db_registration');
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
		// CSRF対策
		// DB情報登録
		$db_id = $this->db_info_model->insert();

		// DB権限情報登録
		$authority_table_data = array(
				'user_id' => $this->tank_auth->get_user_id(),
				'db_id' => $this->db->insert_id(),
				'auth_level' => 2 // DB新規登録者なので、そのDBへのすべての権限付与
		);
		$this->duthority_for_db_model->insert($authority_table_data);

	}
}
