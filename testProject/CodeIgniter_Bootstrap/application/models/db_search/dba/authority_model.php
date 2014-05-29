<?php
class authority_model extends CI_Model {

   public function __construct()
   {
	  parent::__construct();
   }

   /*
    * 説明：postのデータをDB_INFOテーブルに登録する
    * 戻り値：登録したレコードのID
    */
   public function insert($_data)
   {
	   	$this->db->insert( 'authority', $_data );
   		return $this->db->insert_id();
   }

   /*
    * 説明：user_id と object_id を条件に、auth_levelを取得する
    * 戻り値：auth_id
    */
   public function get_auth_level($_user_id,$_object_id){
     $sql='select auth_level
			from
			 authority 
			where
			 user_id=? and
			 object_id=? 
		  ';
   	  $query=$this->db->query($sql,array($_user_id,$_object_id));
   	
      return $query->first_row()->auth_level;
   }
}
