<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sql_registration extends Main_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('db_search/sql_registration_model');
		$this->load->model('db_search/dba/category_model');
		$this->load->helper('url');
	}

	function index()
	{
	  // 自分のIDから、管理者権限のあるカテゴリを取得
	  $data['category_list']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id());
	  
	  // カテゴリIDからdb_listを取得する
	  $data['dblist']=$this->sql_registration_model->get_available_db_list();
      $this->load->view('include/header');
      $this->load->view('sql_registration', $data);
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
