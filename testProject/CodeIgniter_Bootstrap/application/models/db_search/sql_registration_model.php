<?php
class Sql_registration_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_search/dba/db_info_model');
		$this->load->model('db_search/dba/sql_info_model');
		$this->load->model('db_search/dba/authority_model');
		$this->load->model('db_search/dba/object_model');
		$this->load->model('db_search/dba/db_sql_relation_model');
	}
	
	public function index(){
		$dblist=$this->db_info_model->get_all();
		$related_dblist=$this->db_sql_relation_model->get_all();
		foreach($dblist as $key=>$dbinfo){
			foreach($related_dblist as $rdbinfo){
				if($dbinfo['db_id']==$rdbinfo['db_id']){
					$dblist[$key]['selected']='selected';
				}
			}
			if(!array_key_exists('selected',$dblist[$key])) $dblist[$key]['selected']='';
		}	
		return $dblist;
	}

	public function register(){
		// CSRF対策
		// トランザクション開始
		$this->db->trans_start();
		// object_id生成＆登録
		$object_id=$this->object_model->insert(
			array('object_id'=>'','object_type'=>'SQL')
		);
		// SQL情報登録
		$sql_id = $this->sql_info_model->insert(
		   	array(
		   		'object_id' => $object_id,
			   	'display_name' => $this->input->post('display_name'),
			   	'description' => $this->input->post('description'),
				'sql_text' => $this->input->post('sql_text'),
		   )
		);
		// SQL権限情報登録
		$authority_table_data = array(
				'user_id' => $this->tank_auth->get_user_id(),
				'object_id' => $object_id,
				'auth_level' => 2 // 新規登録者なので、すべての権限付与
		);
		$this->authority_model->insert($authority_table_data);

		////// DB_NAMEからDB_IDを取得	
		$db_ids=$this->db_info_model->get_id_by_name($this->input->post('db_list'));

		// DB-SQLリレーション情報登録
		foreach($db_ids as $db_id){
			$this->db_sql_relation_model->insert(
				array('db_id'=>$db_id['db_id'], 'sql_id'=>$sql_id)
			);
		}
//		$this->db->trans_rollback();
//		die();
		
		// トランザクション終了
		$this->db->trans_complete();
	}
}