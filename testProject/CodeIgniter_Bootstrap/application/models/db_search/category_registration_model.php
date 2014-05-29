<?php
class Category_registration_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_search/dba/category_model');
		$this->load->model('db_search/dba/authority_model');
		$this->load->model('db_search/dba/object_model');
	}

	public function register(){
		// CSRF対策…は社内だから保留。
		// トランザクション開始
		$this->db->trans_start();
		// object_id生成＆登録
		$object_id=$this->object_model->insert(
			array('object_id'=>'','object_type'=>'CATEGORY')
		);
		// カテゴリ情報登録
		$db_id = $this->category_model->insert(
		   	array(
			   	'category_id' => $this->input->post('category_id'),
		   		'object_id' => $object_id,
			   	'category_name' => $this->input->post('category_name'),
		   )
		);
		// カテゴリ権限情報登録
		$authority_table_data = array(
				'user_id' => $this->tank_auth->get_user_id(),
				'object_id' => $object_id,
				'auth_level' => 2 // カテゴリ新規登録者なので、そのカテゴリへのすべての権限付与
		);
		$this->authority_model->insert($authority_table_data);
		// トランザクション終了
		$this->db->trans_complete();
	}
}