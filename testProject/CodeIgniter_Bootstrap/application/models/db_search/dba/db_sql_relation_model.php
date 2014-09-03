<?php
class Db_sql_relation_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 説明： Recordを登録する
     * 戻り値：登録したレコードのID
     */
    public function insert($_ary)
    {
        $res=$this->db->insert(
                'db_sql_relation',
                array(
                    'db_id' => $_ary['db_id'],
                    'sql_id' => $_ary['sql_id'],
                    )
                );
        return $res;
    }

    public function replace($_ary)
    {
        $this->db->where('sql_id',$_ary['sql_id']);
        $this->db->where('db_id',$_ary['db_id']);
        $res=$this->db->replace('db_sql_relation',$_ary);
        return $res;
    }

    public function delete($_ary)
    {
        // 片方のIDのみ指定、両方のIDが指定された場合はand検索
        if(isset($_ary['sql_id']))$this->db->where('sql_id',$_ary['sql_id']);
        if(isset($_ary['db_id']))$this->db->where('db_id',$_ary['db_id']);
        $res=$this->db->delete('db_sql_relation');
        return $res;
    }

    public function get_all()
    {
        $query=$this->db->get('db_sql_relation');
        return $query->result_array();
    }

    /*
     * 説明：sql_id を条件に、db_id(複数可能性あり)を取得する
     * 戻り値：sql_id,db_id
     */
    public function get_all_by_sql_id($_sql_id){
        $sql='select sql_id,db_id
            from
            db_sql_relation
            where
            sql_id=?
            ';
        $query=$this->db->query($sql,array($_sql_id));

        return $query->result_array();
    }
}
