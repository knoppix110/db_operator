<?php
class Db_registration_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/db_sql_relation_model');
    }

    public function get_categories(){
        $ary_obj_category=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
        return $ary_obj_category;
    }

    public function register(){
        // CSRF対策
        // トランザクション開始
        $this->db->trans_start();
        // DB情報登録
        $db_id = $this->db_info_model->insert(
                array(
                    'category_id' => $this->input->post('category_id'),
                    'display_name' => $this->input->post('display_name'),
                    'description' => $this->input->post('description'),
                    'dbms' => $this->input->post('dbms'),
                    'db_host' => $this->input->post('host_name'),
                    'db_port' => $this->input->post('port'),
                    'db_user' => $this->input->post('user_name'),
                    'db_passwd' => $this->input->post('password'),
                    'db_name' => $this->input->post('db_name')
                    )
                );

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
        // DB情報登録
        $res = $this->db_info_model->update(
                    $this->input->post('db_id'),
                    array(
                        'category_id' => $this->input->post('category_id'),
                        'display_name' => $this->input->post('display_name'),
                        'description' => $this->input->post('description'),
                        'dbms' => $this->input->post('dbms'),
                        'db_host' => $this->input->post('host_name'),
                        'db_port' => $this->input->post('port'),
                        'db_user' => $this->input->post('user_name'),
                        'db_passwd' => $this->input->post('password'),
                        'db_name' => $this->input->post('db_name')
                    )
                );

        // トランザクション終了
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } 
        return true;

    }
    public function delete($_db_id){
        // CSRF対策
        // トランザクション開始
        $this->db->trans_start();

        // リレーション情報も削除
        $this->db_sql_relation_model->delete(
            array('db_id'=>$_db_id)
        );
 
        // DB情報登録
        $res = $this->db_info_model->delete_by_db_id($_db_id);

        // トランザクション終了
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } 
        return true;

    }



    public function get_editable_dblist(){
        $res=$this->db_info_model->get_dbs_by_uid($this->tank_auth->get_user_id(),2);
        return $res;
    }

    public function get_db_info($_db_id){
        return $this->db_info_model->get_db_info_by_db_id($_db_id);
    }

}
