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
    public function insert($_ary){
        $res=$this->db->insert(
                'db_info',
                array(
                    'category_id' => $_ary['category_id'],
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
    
    public function update($_db_id, $_ary){
        $this->db->where('db_id',$_db_id);
        $res=$this->db->update('db_info',$_ary);
        return $res;
    }

    public function delete_by_db_id($_db_id){
        $this->db->where('db_id',$_db_id);
        $res=$this->db->delete('db_info');
        return $res;
    }

    public function delete_by_category_id($_category_id){
        $this->db->where('category_id',$_category_id);
        $res=$this->db->delete('db_info');
        return $res;
    }

    public function get_all(){
        $res=$this->db->get('db_info');
        return $res->result_array();
    }

    public function get_id_by_name($_display_name){
        $this->db->select('db_id');
        $this->db->where_in('display_name',$_display_name);	
        $res=$this->db->get('db_info');
        return $res->result_array();	
    }

    public function get_id_by_category_id($_category_id){
        $this->db->select('db_id');
        $this->db->where_in('category_id',$_category_id);	
        $res=$this->db->get('db_info');
        return $res->result_array();	
    }

    public function get_db_info_by_db_id($_db_id){
        $this->db->select('*');
        $this->db->where_in('db_id',$_db_id);
        $res=$this->db->get('db_info');
        return $res->row_array();
    }

    public function get_db_info_by_category_id($_category_id){
        $this->db->select('*');
        $this->db->where_in('category_id',$_category_id);
        $res=$this->db->get('db_info');
        return $res->result_array();
    }

    public function get_db_info_by_sql_id($_sql_id){
        $this->db->select('db_info.db_id,display_name');
        $this->db->from('db_sql_relation');
        $this->db->join('db_info','db_sql_relation.db_id=db_info.db_id');
        $this->db->where('sql_id',$_sql_id);
        $query=$this->db->get();

        //var_dump($query->result());
        return $query->result();
    }

    /*
     * あるユーザーが指定した権限を持つDB一覧を取得する
     * 権限はDBが所属しているカテゴリの認証レベルで判定
     */
    public function get_dbs_by_uid($_user_id,$_auth_level){
        $sql='select di.db_id,
                c.category_name,
                di.display_name as db_display_name
            from 
                authority as a,
                db_info as di,
                category as c
            where
                a.category_id=c.category_id and 
                di.category_id=c.category_id and
                a.user_id=? and a.auth_level>=?
            order by category_name,display_name
                ';  // 編集可能:auth_level>=２,実行可能：auth_level>=1
        $res=$this->db->query($sql,array($_user_id,$_auth_level));
        return $res->result_array();
    }

    public function get_editable_dblist(){
        $res=$this->get_dbs_by_uid($this->tank_auth->get_user_id(),2);
        return $res;
    }





}
