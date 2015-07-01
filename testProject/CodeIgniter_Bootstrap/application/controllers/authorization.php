<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authorization extends Main_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('db_search/category_registration_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/authorization_model');
        $this->load->model('tank_auth/users');
        $this->load->helper('url');
    }

    function index()
    {
        if($this->tank_auth->get_role()=='admin'){
            // ユーザーリストとカテゴリリストを全部
            $this->data['categories']=$this->category_model->get_all();
            $this->data['users']=$this->users->get_all_users();
        }else{
            // ユーザーリストは全部、カテゴリリストは自分が管理権限持っているもののみ取得
            $this->data['categories']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
            if(count($this->data['categories'])==0){
                $this->load->view('include/header',$this->data);
                $this->load->view('not_authorized');
                $this->load->view('include/footer');
                return;
            }
            $this->data['users']=$this->users->get_all_users();
        }
        //print_r($this->data['categories']);
        //print_r($this->data['users']);
        $this->load->view('include/header',$this->data);
        $this->load->view('authorization');
        $this->load->view('include/footer');
    }

    function auth_list()
    {
        if($this->tank_auth->get_role()=='admin'){ // admin権限の場合、全リスト取得
            // ユーザーリストとカテゴリリストを全部
            $this->data['auth_list']=$this->authority_model->get_auth_info();
        }else{ // それ以外の場合は権限があるカテゴリに関してのみデータ取得
            $category_rows=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
            foreach($category_rows as $row){
                $authorized_categories[]=$row['category_name'];
            }
            if(isset($authorized_categories)){
                $this->data['auth_list']=$this->authority_model->get_auth_info_by_category($authorized_categories);
            }else{
                $this->load->view('include/header',$this->data);
                $this->load->view('not_authorized');
                $this->load->view('include/footer');
                return;
            }
        }

        $this->load->view('include/header',$this->data);
        $this->load->view('auth_list');
        $this->load->view('include/footer');
    }

    function delete(){
        // リクエスト元ユーザが対象カテゴリの権限を持っているかチェック
        $my_auth_level=$this->authority_model->get_auth_level($this->tank_auth->get_user_id(),$this->input->get('category_id'));
        if($my_auth_level<2){ //カテゴリに対して管理者権限がない場合はロールバックして終了
            die('no auth!!');
        }
        $this->authority_model->delete_by_user_id_category_id($this->input->get('user_id'),$this->input->get('category_id'));

        $this->auth_list();
        
    }

    function register(){
        // 入力値の妥当性チェック
        //die("妥当性チェック！！！");

        //print_r($this->input->post('user_list'));
        //print_r($this->input->post('category_list'));
        //print_r($this->input->post('auth_level'));

        $this->db->trans_start();

        // INSERTを生成してあげる
        foreach($this->input->post('category_list') as $category_id){
            // リクエスト元ユーザが対象カテゴリの権限を持っているかチェック
            $my_auth_level=$this->authority_model->get_auth_level($this->tank_auth->get_user_id(),$category_id);
            if($my_auth_level<2){ //カテゴリに対して管理者権限がない場合はロールバックして終了
                $this->db->trans_rollback();
                die('no auth!!');
            }
            // 権限登録処理を実行
            foreach($this->input->post('user_list') as $user_id){
                //user_id,category_id,auth_level,auth_type;
                $authority=array('user_id'=>$user_id,'category_id'=>$category_id,'auth_level'=>$this->input->post('auth_level'),'auth_type'=>'');
                // Model呼び出し(authority)
                $this->authority_model->insert($authority);
            }
        }
        
        $this->db->trans_complete();
        $this->auth_list();
    }
}

