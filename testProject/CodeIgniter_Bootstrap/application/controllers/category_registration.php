<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_registration extends Main_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('db_search/category_registration_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/sql_info_model');
        $this->load->helper('url');
    }

    function index()
    {
        if($this->is_unauthorized_user()){ return; }

        $this->load->view('include/header',$this->data);
        $this->load->view('category_registration');
        $this->load->view('include/footer');
    }

    function register(){
        if($this->is_unauthorized_user()){ return; }

        /*
           echo $this->input->post('category_id');
           echo $this->input->post('category_id');
           echo $this->input->post('category_name');
         */
        
        // 妥当性チェック（入力値なしはエラー）
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category_name', 'カテゴリ名', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            die('入力値エラー');
        }
        
        // Model呼び出し
        $this->category_registration_model->register();
        
        redirect('/', 'refresh');

    }

    function delete(){
        if($this->is_unauthorized_user()){ return; }

        // 権限のあるカテゴリを取得
        $category=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2,$this->input->get('category_id'));
        // 削除対象のカテゴリに対して権限があった場合
        if(count($category)==1){
            $this->db->trans_begin();
            // 外部キーで紐づくレコード削除
            $this->authority_model->delete_by_category_id($this->input->get('category_id'));
            
            // カテゴリに紐づくdb_idとsql_idを削除
            $db_info_list=$this->db_info_model->get_id_by_category_id($this->input->get('category_id'));
            if(count($db_info_list) > 0 ){
                foreach($db_info_list as $db_info){
                    $this->db_sql_relation_model->delete_by_db_id($db_info['db_id']);
                }
            }
            $this->db_info_model->delete_by_category_id($this->input->get('category_id'));
            $this->sql_info_model->delete_by_category_id($this->input->get('category_id'));
            // カテゴリ削除
            $this->category_model->delete_by_category_id($this->input->get('category_id'));
            $this->db->trans_complete();
        }

        $this->category_list();
    }

    function category_list(){
        if($this->is_unauthorized_user()){ return; }

        if($this->tank_auth->get_role()=='admin'){ // admin権限の場合、全リスト取得
            // カテゴリリストを全部
            $this->data['category_list']=$this->category_model->get_all();
        }else{ // それ以外の場合は権限があるカテゴリに関してのみデータ取得
            $this->data['category_list']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
        }
        $this->load->view('include/header',$this->data);
        $this->load->view('category_list');
        $this->load->view('include/footer');
        
    }
}

