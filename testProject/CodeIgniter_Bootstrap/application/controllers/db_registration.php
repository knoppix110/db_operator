<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_registration extends Main_Controller
{
    private $data=array();

    function __construct() {
        parent::__construct();
        $this->load->model('db_search/db_registration_model');
        $this->load->helper('url');
        $this->data['user_id']	= $this->tank_auth->get_user_id();
        $this->data['username']	= $this->tank_auth->get_username();
    }

    function index()
    {
        $this->data['category_list']=$this->db_registration_model->get_categories();
        // 新規登録なのでDB情報は空。編集処理の場合は値を入れる
        $this->data['db_info']=array('db_id'=>'',
                               'category_id'=>'',
                               'display_name'=>'',
                               'description'=>'',
                               'dbms'=>'',
                               'db_host'=>'',
                               'db_user'=>'',
                               'db_passwd'=>'',
                               'db_name'=>'');
        $this->data['action']='index.php/db_registration/register';
        $this->load->view('include/header',$this->data);
        $this->load->view('db_registration',$this->data);
        $this->load->view('include/footer');
    }

    function register(){
        // Form Valication 使う？（とりあえず面倒だから保留）

        // Model呼び出し
        $res=$this->db_registration_model->register();
        
        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php/db_registration/dblist'));
        }
    }

    function update(){
        // Form Valication 使う？（とりあえず面倒だから保留）

        // Model呼び出し
        $res=$this->db_registration_model->update();
        
        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php/db_registration/dblist'));
        }
    }

    function delete(){
        // Form Valication 使う？（とりあえず面倒だから保留）

        // Model呼び出し
        $res=$this->db_registration_model->delete($this->input->get('db_id'));
        
        if($res==false){
            $this->load->view('include/header',$this->data);
            echo "request failed";
            $this->load->view('include/footer');
        }else{
            redirect(base_url('index.php/db_registration/dblist'));
        }
    }

    public function dblist(){
        $this->data['db_list']=$this->db_registration_model->get_editable_dblist();

        $this->load->view('include/header',$this->data);
        $this->load->view('dblist',$this->data);
        $this->load->view('include/footer');
    }

    public function show_edit(){
        $this->data['category_list']=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);

        $this->data['db_info']=$this->db_registration_model->get_db_info($this->input->get('db_id'));
        $this->data['action']='index.php/db_registration/update';
        //var_dump($this->data);

        $this->load->view('include/header',$this->data);
        $this->load->view('db_registration',$this->data);
        $this->load->view('include/footer');
    }
}
