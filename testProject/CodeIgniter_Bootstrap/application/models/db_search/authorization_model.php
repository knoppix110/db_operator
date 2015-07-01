<?php

class Authorization_model extends CI_Model{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/authority_model');

    }

    public function auth_list($_user_id,$_role){

        if($_role=='admin'){ // admin権限の場合、全リスト取得
            // ユーザーリストとカテゴリリストを全部
            $this->authority_model->get_auth_info_by_user_id($_user_id,2);
        }else{ // それ以外の場合は権限があるカテゴリに関してのみデータ取得
            // ユーザーリストは全部、カテゴリリストは自分が管理権限持っているもののみ
            $this->authority_model->get_auth_info_by_user_id($_user_id,2);
        }

    }

    public function register(){

        // CSRF対策…は社内だから保留。
        // トランザクション開始
        $this->db->trans_start();

        // カテゴリ情報登録
        $category_id = $this->category_model->insert(
                array(
                    'category_name' => $this->input->post('category_name'),
                    )
                );
        // カテゴリ権限情報登録
        $authority_table_data = array(
                'user_id' => $this->tank_auth->get_user_id(),
                'category_id' => $category_id,
                'auth_level' => 2 // カテゴリ新規登録者なので、そのカテゴリへのすべての権限付与
                );
        $this->authority_model->insert($authority_table_data);

        // トランザクション終了
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } 
        return true;

    }

}
