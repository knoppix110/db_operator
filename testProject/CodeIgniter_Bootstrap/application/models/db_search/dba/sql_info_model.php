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
                    'category_id' => $_ary['category_id'],
                    'display_name' => $_ary['display_name'],
                    'category_id' => $_ary['category_id'],
                    'description' => $_ary['description'],
                    'sql_text' => $_ary['sql_text'],
                    //'conditions' => $_ary['conditions'],
                    )
                );

        if(!$res){
            die('insert error');
        };

        return $this->db->insert_id();
    }

    public function update($_sql_id, $_ary){
        $this->db->where('sql_id',$_sql_id);
        $res=$this->db->update('sql_info',$_ary);
        return $res;
    }

    public function delete_by_sql_id($_sql_id){
        $this->db->where('sql_id',$_sql_id);
        $res=$this->db->delete('sql_info');
        return $res;
    }

    public function delete_by_category_id($_category_id){
        $this->db->where('category_id',$_category_id);
        $res=$this->db->delete('sql_info');
        return $res;
    }

    public function get_all()
    {
        $res=$this->db->get('sql_info');
        return $res->result_array();
    }

    /*
     * 説明：sql_id を条件に、sql_infoテーブルのレコードを取得する
     * 戻り値： sql_infoのrecord
     */
    public function get_sql_info_by_sql_id($_sql_id){
        $this->db->select('*');
        $this->db->where('sql_id',$_sql_id);
        $res=$this->db->get('sql_info');

        return $res->first_row('array');
    }


    /*
     * あるユーザーが指定した権限を持つDB一覧を取得する
     * 権限はSQLが所属しているカテゴリの認証レベルで判定
     */
    public function get_sqls_by_uid($_user_id,$_auth_level){
        $sql='select s.sql_id,
            c.category_name,
            s.display_name as sql_display_name
                from
                authority as a,
            sql_info as s,
            category as c
                where
                a.category_id=c.category_id and
                s.category_id=c.category_id and
                a.user_id=? and
                a.auth_level>=? 
                order by c.category_name,s.sql_id;
        ';
        $query=$this->db->query($sql,array($_user_id,$_auth_level)); 

        return $query->result_array();
    }


}
