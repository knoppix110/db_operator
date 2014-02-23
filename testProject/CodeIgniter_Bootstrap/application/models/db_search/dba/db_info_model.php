<?php
/*
 * Unit_model
 * An easier way to construct your unit testing
 * and pass it to a really nice looking page.
 *
 * @author sjlu
 */
class Db_info_model extends CI_Model {

   public function __construct()
   {
	  parent::__construct();
   }

   /*
    * 説明：postのデータをDB_INFOテーブルに登録する
    * 戻り値：登録したレコードのID
    */
   public function insert($_ary)
   {
	   $res=$this->db->insert(
		   'db_info',
		   	array(
		   		'object_id' => $_ary['object_id'],
			   	'display_name' => $_ary['display_name'],
			   	'description' => $_ary['description'],
			   	'dbms' => $_ary['dbms'],
			   	'db_host' => $_ary['db_host'],
				'db_user' => $_ary['db_user'],
			   	'db_passwd' => $_ary['db_passwd'],
			   	'db_name' => $_ary['db_name']
		   )
   		);
	   
   		return $this->db->insert_id();
   }
   
   public function get_all()
   {
   		 $query=$this->db->get('db_info');
   		 return $query->result_array();
   }
   
   public function get_id_by_name($_display_name)
   {
   		$this->db->select('db_id');
		$this->db->where_in('display_name',$_display_name);	
		$query=$this->db->get('db_info');
		return $query->result_array();	
   }

}
