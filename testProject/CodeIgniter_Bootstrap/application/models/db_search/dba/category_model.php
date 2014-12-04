<?php
/*
 * Unit_model
 * An easier way to construct your unit testing
 * and pass it to a really nice looking page.
 *
 * @author sjlu
 */
class Category_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 説明：postのデータをCategoryテーブルに登録する
     * 戻り値：登録したレコードのID
     */
    public function insert($_ary)
    {
        $res=$this->db->insert(
                'category',
                array(
                    'category_name' => $_ary['category_name'],
                    )
                );

        return $this->db->insert_id();
    }

    public function delete($_ary)
    {
        $res=$this->db->delete('category',$_ary);
        return $res;
    }

    public function delete_by_category_id($_category_id)
    {
        $res=$this->db->where('category_id',$_category_id);
        $res=$this->db->delete('category');
        return $res;
    }

    public function get_all(){
        $this->db->select('*');
        $this->db->from('category');

        $query=$this->db->get();
       	//var_dump($query->result());
        return $query->result_array();
    }

    public function get_all_by_user_id($_user_id,$_auth_level,$_category_id=null)
    {
        $this->db->select('category.category_id,category_name');
        $this->db->from('category');
        $this->db->join('authority','authority.category_id=category.category_id');
        $this->db->where('user_id',$_user_id);
        $this->db->where('auth_level >=',$_auth_level);
        if($_category_id!=null){
            $this->db->where('category.category_id',$_category_id);
        }
        $query=$this->db->get();
        //   		var_dump($query->result());
        return $query->result_array();
    }

    public function get_editable_categories(){
        $category_rows=$this->get_all_by_user_id($this->tank_auth->get_user_id(),2);

        $authorized_categories=array();
        foreach($category_rows as $row){ // 詰替え
            $authorized_categories[]=$row['category_name'];
        } 

        return $authorized_categories;
    }


}
