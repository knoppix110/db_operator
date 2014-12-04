<?php

class Sql_execution_model extends CI_Model{

    private $fields;

    public function __construct(){ 
        parent::__construct();
        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/sql_info_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/db_sql_relation_model');
    }

    public function index($_sql_id){
        // echo $this->input->get('sql_id');
        $sql_info=$this->sql_info_model->get_sql_info_by_sql_id($_sql_id);
        
        return $sql_info;
    }

    public function execute($_sql_id,$_db_id,$_cond){
        $db_info=$this->db_info_model->get_db_info_by_db_id($_db_id);
        $sql_info=$this->sql_info_model->get_sql_info_by_sql_id($_sql_id);
        
        log_message('debug',$this->create_dsn($db_info));
        log_message('debug',print_r($db_info,true));

        // DB接続用のDSN作成
        $targetDB=$this->load->database($this->create_dsn($db_info),TRUE);
        $result=$targetDB->query($sql_info['sql_text'],$_cond);

        if(!$result){
            return array(false,$targetDB->_error_message());
        }
        
        //print_r($db_info);
        //print_r($sql_info);
        //print_r($_cond);
        //var_dump($res->result_array());

        $this->fields=$result->list_fields();
        return array(true,$result->result_array());
    }

    public function list_fields(){
        return $this->fields;
    }

    private function create_dsn($_db_info){
        $dsn=sprintf('%s://%s:%s@%s/%s?port=%s',
            $_db_info['dbms'],
            $_db_info['db_user'],
            $_db_info['db_passwd'],
            $_db_info['db_host'],
            $_db_info['db_name'],
            $_db_info['db_port']
            );
             
        //$dsn = 'dbdriver://username:password@hostname/database';
        return $dsn;
    }

}

