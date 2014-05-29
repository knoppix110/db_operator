<?php
class Db_registration_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_search/dba/db_info_model');
		$this->load->model('db_search/dba/authority_model');
		$this->load->model('db_search/dba/object_model');
		$this->load->model('db_search/dba/category_model');
	}
	
	public function get_categories(){
		$ary_obj_category=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id());
		return $ary_obj_category;
	}

	public function register(){
		// CSRF対策
		// トランザクション開始
		$this->db->trans_start();
		// object_id生成＆登録
		$object_id=$this->object_model->insert(
			array('object_id'=>'','object_type'=>'DB')
		);
		// DB情報登録
		$db_id = $this->db_info_model->insert(
		   	array(
		   		'object_id' => $object_id,
			   	'display_name' => $this->input->post('display_name'),
			   	'description' => $this->input->post('description'),
			   	'dbms' => $this->input->post('dbms'),
			   	'db_host' => $this->input->post('host_name'),
				'db_user' => $this->input->post('user_name'),
			   	'db_passwd' => $this->input->post('password'),
			   	'db_name' => $this->input->post('db_name')
		   )
		);
		// DB権限情報登録
		$authority_table_data = array(
				'user_id' => $this->tank_auth->get_user_id(),
				'object_id' => $object_id,
				'auth_level' => 2 // DB新規登録者なので、そのDBへのすべての権限付与
		);
		$this->authority_model->insert($authority_table_data);
		// トランザクション終了
		$this->db->trans_complete();
	}
}