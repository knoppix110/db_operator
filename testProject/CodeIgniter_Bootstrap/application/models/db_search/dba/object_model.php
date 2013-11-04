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
				'object_id' => $_ary['object_id'],
				'object_type' => $_ary['object_type'],
			)
		);
		return $this->db->insert_id();	
	}
}
