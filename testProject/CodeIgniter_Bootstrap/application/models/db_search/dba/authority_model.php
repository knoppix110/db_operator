<?php
class authority_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 説明：postのデータをauthorityテーブルに登録する
     * 戻り値：登録したレコードのID
     */
    public function insert($_data)
    {
        $this->db->insert( 'authority', $_data );
        return $this->db->insert_id();
    }

    public function delete_by_user_id_category_id($_user_id,$_category_id)
    {
        $this->db->where('user_id', $_user_id );
        $this->db->where('category_id', $_category_id );
        $res=$this->db->delete('authority');
        return $res;
    }

    public function delete_by_category_id($_category_id)
    {
        $this->db->where('category_id', $_category_id );
        $res=$this->db->delete('authority');
        return $res;
    }


    /*
     * 説明：user_id と category_id を条件に、auth_levelを取得する
     * 戻り値：category_id
     */
    public function get_auth_level($_user_id,$_category_id){
        $sql='select auth_level
            from
            authority 
            where
            user_id=? and
            category_id=? 
            ';
        $query=$this->db->query($sql,array($_user_id,$_category_id));
        
        return $query->first_row()->auth_level;
    }


    public function get_auth_info_by_user_id($_user_id,$_auth_level){
        $this->db->select('user_id,authority.category_id,username,category_name,auth_level,auth_type');
        $this->db->from('users');
        $this->db->join('authority','users.id=authority.user_id','left outer');
        $this->db->join('category','authority.category_id=category.category_id','left outer');
        $this->db->where('user_id',$_user_id);
        $this->db->where('auth_level',$_auth_level);
        $query=$this->db->get();

        return $query->result_array();
    }

    public function get_auth_info_by_category($_category){
        $this->db->select('user_id,authority.category_id,username,category_name,auth_level,auth_type');
        $this->db->from('users');
        $this->db->join('authority','users.id=authority.user_id','left outer');
        $this->db->join('category','authority.category_id=category.category_id','left outer');
        $this->db->where_in('category_name',$_category);
        $query=$this->db->get();

        return $query->result_array();
    }

    public function get_auth_info(){
        $this->db->select('user_id,authority.category_id,username,category_name,auth_level,auth_type');
        $this->db->from('users');
        $this->db->join('authority','users.id=authority.user_id');
        $this->db->join('category','authority.category_id=category.category_id');
        $query=$this->db->get();

        return $query->result_array();
    }



}

