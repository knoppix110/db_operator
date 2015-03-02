<?php

class Conditions_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($_data)
    {
        $this->db->insert( 'conditions', $_data );
        return $this->db->insert_id();
    }

    public function delete_by_sql_id($_sql_id)
    {
        $this->db->where('sql_id', $_sql_id );
        $res=$this->db->delete('conditions');
        return $res;
    }

    public function get_by_sql_id($_sql_id){
        $this->db->where('sql_id', $_sql_id );
        $this->db->select('*');
        $this->db->from('conditions');

        $query=$this->db->get();
        return $query->result_array();
    }

}

