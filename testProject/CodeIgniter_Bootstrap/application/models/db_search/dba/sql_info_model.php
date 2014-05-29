<?php
/*
 * Unit_model
 * An easier way to construct your unit testing
 * and pass it to a really nice looking page.
 *
 * @author sjlu
 */
class Sql_info_model extends CI_Model {

   public function __construct()
   {
	  parent::__construct();
   }

   /*
    * 説明：postデータをテーブルに登録する
    * 戻り値：登録したレコードのID
    */
   public function insert($_ary)
   {
	   $res=$this->db->insert(
		   'sql_info',
		   	array(
		   		'object_id' => $_ary['object_id'],
			   	'display_name' => $_ary['display_name'],
			   	'description' => $_ary['description'],
			   	'sql_text' => $_ary['sql_text']
		   )
   		);
	   
   		return $this->db->insert_id();
   }
   
   public function get_all()
   {
    	$query=$this->db->get('sql_info');
    	return $query->result_array();
   }
   
   /*
    * 説明：sql_id を条件に、sql_infoテーブルのレコードを取得する
    * 戻り値： sql_infoのrecord
    */
   public function get_sql_info($_sql_id){
   	$sql='select *
			from
			 sql_info
			where
			 sql_id=? 
		  ';
   	$query=$this->db->query($sql,array($_sql_id));
   
   	return $query->first_row('array');
   }

}
