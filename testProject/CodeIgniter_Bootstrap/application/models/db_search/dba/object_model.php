<?php

class Object_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}	
	
	public function insert($_ary)
	{
		$res=$this->db->insert(
			'object',
			array(
				'category_id' => $_ary['category_id'],
				'object_type' => $_ary['object_type'],
			)
		);
		return $this->db->insert_id();	
	}
}
