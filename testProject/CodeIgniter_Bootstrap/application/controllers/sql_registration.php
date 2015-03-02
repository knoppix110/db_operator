<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sql_registration extends Main_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('db_search/sql_registration_model');
        $this->load->model('db_search/dba/db_sql_relation_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/conditions_model');
        $this->load->helper('url');
    }

    function index()
    {
        if($this->is_unauthorized_user()){ return; }

        // 自分のIDから、管理者権限のあるカテゴリを取得
        $this->data['category_list']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);

        $this->data['sql_info']=array(
                'sql_id'=>'',
                'category_id'=>'',
                'display_name'=>'',
                'description'=>'',
                'sql_text'=>'',
                'conditions'=>null);
        $this->data['action']='index.php/sql_registration/register';

        // カテゴリIDからdb_listを取得する
        $this->data['dblist']=$this->sql_registration_model->get_available_db_list();

        $this->load->view('include/header',$this->data);
        $this->load->view('sql_registration', $this->data);
        $this->load->view('include/footer');
    }

    function register(){
        $post_data=$this->input->post();

        // Model呼び出し
        $res=$this->sql_registration_model->register($post_data);

        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php'));
        }
    }

    function update(){
        // Form Valication 使う？（とりあえず面倒だから保留）
        $post_data=$this->input->post();

        // Model呼び出し
        $res=$this->sql_registration_model->update($post_data);

        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php'));
        }
    }

    function delete(){
        // Form Valication 使う？（とりあえず面倒だから保留）

        // Model呼び出し
        $res=$this->sql_registration_model->delete($this->input->get('sql_id'));

        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php/sql_registration/sqllist'));
        }
    }

    public function sqllist(){
        if($this->is_unauthorized_user()){ return; }
        $this->data['sql_list']=$this->sql_registration_model->get_editable_sqllist();

        $this->load->view('include/header',$this->data);
        $this->load->view('sqllist',$this->data);
        $this->load->view('include/footer');
    }

    public function show_edit(){
        if($this->is_unauthorized_user()){ return; }

        $this->data['category_list']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
        $this->data['dblist']=$this->sql_registration_model->get_available_db_list();
        $this->data['selected_dblist']=$this->db_sql_relation_model->get_all_by_sql_id($this->input->get('sql_id'));

        $this->data['sql_info']=$this->sql_registration_model->get_sql_info($this->input->get('sql_id'));
        //$this->data['sql_info']['conditions']=json_decode($this->data['sql_info']['conditions']);
        //if($this->data['sql_info']['conditions']==false)$this->data['sql_info']['conditions']=null;
        $this->data['conditions']=$this->conditions_model->get_by_sql_id($this->input->get('sql_id'));
        $this->data['action']='index.php/sql_registration/update';
        //var_dump($this->data['conditions']);

        log_message('debug',print_r($this->data,true));

        $this->load->view('include/header',$this->data);
        $this->load->view('sql_registration',$this->data);
        $this->load->view('include/footer');
    }

}

