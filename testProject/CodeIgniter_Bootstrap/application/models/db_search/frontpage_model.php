<?php

class Frontpage_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
        $this->load->model('db_search/dba/sql_info_model');
	}
	
	public function index($_user_id){
    /*
		$sql='select s.sql_id,
				c.category_name,
				s.display_name as sql_display_name
				from
				 authority as a1,
				 authority as a2,
				 sql_info as s,
				 category as c
				where
				 a1.category_id=c.category_id and
				 s.category_id=a2.category_id and
				 s.category_id=c.category_id and
				 a1.user_id=? and
				 a1.auth_level>=1 and
				 a2.user_id=? and
				 a2.auth_level>=1
				order by c.category_name,s.sql_id;
			';
		$query=$this->db->query($sql,array($_user_id,$_user_id)); 
    */
		return $this->sql_info_model->get_sqls_by_uid($_user_id,1);
	}
	
}
