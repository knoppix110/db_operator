<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sql_execution extends Main_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('db_search/sql_execution_model');
        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->helper('url');
    }

    function index()
    {
        // Model呼び出し
        $this->data['sql_info']=$this->sql_execution_model->index($this->input->get('sql_id'));
        $auth_level=$this->authority_model->get_auth_level($this->tank_auth->get_user_id(),$this->data['sql_info']['category_id']);
        $this->data['db_info_list']=$this->db_info_model->get_db_info_by_sql_id($this->input->get('sql_id'));
        $this->data['sql_info']['sql_text']=str_replace("\n",'</br>',$this->data['sql_info']['sql_text']);
        $this->data['sql_info']['sql_text']=preg_replace('/<\/br>\s{2,}([^<]+)/','<dd>\1</dd>',$this->data['sql_info']['sql_text']);

        $this->load->view('include/header',$this->data);
        if($auth_level>=1){
            $this->load->view('sql_execution',$this->data);
        }else{
            // 権限がありません！画面
            $this->load->view('no_auth');
        }
        $this->load->view('include/footer');
    }

    function execute(){
        // 妥当性のチェック（所属カテゴリに対して権限を持ってるか）
        //// 対象のSQL情報を取得
        $sql_info=$this->sql_info_model->get_sql_info_by_sql_id($this->input->post('sql_id')); 
        log_message('debug',print_r($sql_info,true));
        //// 対象SQLに対してどの権限を持っているかを取得
        $auth_level=$this->authority_model->get_auth_level($this->tank_auth->get_user_id(),$sql_info['category_id']);
        
        log_message('debug','</br>auth_level:'.$auth_level.'</br>');
        
        $this->load->view('include/header',$this->data);
        if($auth_level>=1){ // 実行権限がある場合
            // SQL 実行
            $ary_res=$this->sql_execution_model->execute($this->input->post('sql_id'),$this->input->post('db_id'),$this->input->post('conditions'));
            $this->data['result']=$ary_res[0];  // true or false
            $this->data['records']=$ary_res[1]; // エラー時はエラーメッセージが代入される
            
            log_message('debug',print_r($this->data['result'],true));

            // field取得
            $this->data['fields']=$this->sql_execution_model->list_fields();
            log_message('debug',print_r($this->data['fields'],true));

            // DB情報の取得
            $db_info=$this->db_info_model->get_db_info_by_db_id($this->input->post('db_id'));
            $this->data['target_db']=$db_info['display_name'];

            // 入力した条件を表示項目に追加
            $this->data['conditions']=$this->input->post('conditions');

            // 実行日時も表示項目に追加
            $this->data['exec_date']=date('Y-m-d H:i:s');

            $this->load->view('sql_result',$this->data);

        }else{ // 権限がない場合
            $this->load->view('no_auth');
        }

        $this->load->view('include/footer');
       
    }
}

