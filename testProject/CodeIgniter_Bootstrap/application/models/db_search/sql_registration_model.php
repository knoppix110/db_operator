<?php

class Sql_registration_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/sql_info_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/db_sql_relation_model');
        $this->load->model('db_search/dba/category_model');
    }

    public function get_category_by_user_id($_user_id){
        return $this->category_model->get_all_by_user_id($_user_id);
    }

    public function get_available_db_list(){
        $dblist=$this->db_info_model->get_dbs_by_uid($this->tank_auth->get_user_id(),2);
        //echo '</br>-----------</br>';
        //var_dump($dblist);
        $related_dblist=$this->db_sql_relation_model->get_all_by_sql_id($this->input->get('sql_id'));
        //var_dump($related_dblist);
        foreach($dblist as $key=>$dbinfo){
            foreach($related_dblist as $rdbinfo){
                //echo $dbinfo['db_id'].'=='.$rdbinfo['db_id'].'</br>';
                if($dbinfo['db_id']==$rdbinfo['db_id']){
                    $dblist[$key]['selected']='selected';
                }
            }
            if(!array_key_exists('selected',$dblist[$key])) $dblist[$key]['selected']='';
        }	
        //echo '</br>-----------</br>';
        return $dblist;
    }

    public function register(){
        // CSRF対策

        // トランザクション開始
        $this->db->trans_start();

        // SQLの条件項目を取得＆Json Encodeする
        $conditions=json_encode($this->input->post('condition'));

        // SQL情報登録
        $sql_id = $this->sql_info_model->insert(
                array(
                    'category_id' => $this->input->post('category_id'),
                    'display_name' => $this->input->post('display_name'),
                    'description' => $this->input->post('description'),
                    'sql_text' => $this->input->post('sql_text'),
                    'conditions' => $conditions,
                    )
                );

        ////// DB_NAMEからDB_IDを取得	
        $db_ids=$this->db_info_model->get_id_by_name($this->input->post('db_list'));

        // DB-SQLリレーション情報登録
        foreach($db_ids as $db_id){
            $this->db_sql_relation_model->insert(
                    array('db_id'=>$db_id['db_id'], 'sql_id'=>$sql_id)
                    );
        }
        //		$this->db->trans_rollback();
        //		die();

        // トランザクション終了
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } 
        return true;
    }

     public function update(){
        // CSRF対策

        // トランザクション開始
        $this->db->trans_start();

        // SQLの条件項目を取得＆Json Encodeする
        $conditions=json_encode($this->input->post('condition'));

        // SQL情報登録
        $this->sql_info_model->update(
            $this->input->post('sql_id'),
            array(
                'category_id' => $this->input->post('category_id'),
                'display_name' => $this->input->post('display_name'),
                'description' => $this->input->post('description'),
                'sql_text' => $this->input->post('sql_text'),
                'conditions' => $conditions,
            )
        );

        ////// DB_NAMEからDB_IDを取得	
        $db_ids=$this->db_info_model->get_id_by_name($this->input->post('db_list'));

        // 一度関連対象SQL-IDのリレーション情報を削除
        $this->db_sql_relation_model->delete(
            array('sql_id'=>$this->input->post('sql_id'))
        );

        // DB-SQLリレーション情報登録（既に存在するレコードは上書き）
        foreach($db_ids as $db_id){
            echo "Debug!!";
            $this->db_sql_relation_model->insert(
                    array('db_id'=>$db_id['db_id'], 'sql_id'=>$this->input->post('sql_id'))
                    );
        }

        // トランザクション終了
        $this->db->trans_complete();
        //		$this->db->trans_rollback();
        // 		die();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } 
        return true;
    }

    public function delete($_sql_id){
        // CSRF対策
        
        // トランザクション開始
        $this->db->trans_start();
        
        // リレーション情報を削除
        $this->db_sql_relation_model->delete(
            array('sql_id'=>$_sql_id)
        );
        
        // SQL情報削除
        $res=$this->sql_info_model->delete_by_sql_id($_sql_id);
        
        // トランザクション終了
        $this->db->trans_complete();
        //		$this->db->trans_rollback();
        // 		die();
        
        if ($this->db->trans_status() === FALSE)
        {
        	$this->db->trans_rollback();
            return false;
        } 
        return true;
    }

    public function get_editable_sqllist(){
        $res=$this->sql_info_model->get_sqls_by_uid($this->tank_auth->get_user_id(),2);
        return $res;
    }

    public function get_sql_info($_sql_id){
        return $this->sql_info_model->get_sql_info_by_sql_id($_sql_id);
    }
}
