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

}
