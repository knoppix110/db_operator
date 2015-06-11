<?php

class Sql_execution_model extends CI_Model{

    protected $fields;
    protected $name_value_list;
    protected $map_rel_operator;

    public function __construct(){ 
        parent::__construct();

        $this->map_rel_operator=array(
            'eq'=>'=',
            'le'=>'<=',
            'ge'=>'>=',
        );

        $this->load->model('db_search/dba/db_info_model');
        $this->load->model('db_search/dba/sql_info_model');
        $this->load->model('db_search/dba/authority_model');
        $this->load->model('db_search/dba/category_model');
        $this->load->model('db_search/dba/db_sql_relation_model');
        $this->load->model('db_search/dba/conditions_model');
    }

    public function index($_sql_id){
        // echo $this->input->get('sql_id');
        $sql_info=$this->sql_info_model->get_sql_info_by_sql_id($_sql_id);
        
        return $sql_info;
    }

    public function get_conditions_for_preview($_sql_id){
        $conditions=$this->conditions_model->get_by_sql_id($_sql_id);
        foreach($conditions as $key => $row){
            $conditions[$key]['rel_operator']=$this->map_rel_operator[$row['rel_operator']];
        }
        return $conditions;

    }

    // SQLを実行する
    public function execute($_sql_id,$_db_id,$_conditions_input){
        $values=array();

        $db_info=$this->db_info_model->get_db_info_by_db_id($_db_id);
        $sql_info=$this->sql_info_model->get_sql_info_by_sql_id($_sql_id);

        // DBから条件に関する定義情報を取得
        $conditions_def=$this->conditions_model->get_by_sql_id($_sql_id);

        // 条件SQLを作成
        if($_conditions_input!=false){
            $cond_str=array();
            foreach($_conditions_input as $id=>$cond_in){
                if(isset($cond_in['disable'])){
                    if($cond_in['disable']==true){continue;}
                }
                foreach($conditions_def as $key=>$cond_def){

                    // 入力された条件情報が定義と一致されている
                    if( $cond_def['condition_id']==$id ){
                
                        if(!isset($cond_str[$cond_def['location_no']])){
                            $cond_str[$cond_def['location_no']]='';
                        } 

                        // [カラム名] の文字列結合
                        $cond_str[$cond_def['location_no']] .= $cond_def['column_name'] . ' ';
                        // [比較演算子]  [値]  の文字列を結合
                        $cond_str[$cond_def['location_no']] .= $this->map_rel_operator[$cond_def['rel_operator']] . ' ? ';

                        // 論理演算子が指定されていれば付けてあげる
                        //echo $cond_in['connector'];
                        if($cond_in['connector']!='nothing'){
                            $cond_str[$cond_def['location_no']] .= $cond_def['connector'] . ' ';
                        }

                        // ユーザーの入力値と条件名を配列に保存（後でユーザーに入力値を見せてあげるため）
                        $this->name_value_list[$cond_def['condition_name']]=$cond_in['value'];
                        
                        // 入力値を配列に保存（後でバインドさせるため）
                        $values[]=$cond_in['value'];
                        //echo $cond_str[$cond_def['location_no']];

                        // ▽入==== 入力値をＳＱＬ内で再利用する機能 ====
                        // もし定義したＳＱＬに入力した「カラムの値」だけ組込む識別子があった場合
                        $pattern='/@'.$cond_def['location_no'].'\-\>'.$cond_def['condition_name'].'/';
                        // 数値以外をクオートする
                        if (!is_numeric($cond_in['value'])) {
                            $value = "'" . mysql_real_escape_string($cond_in['value']) . "'";
                        }else{
                            $value = mysql_real_escape_string($cond_in['value']);
                        }
                        $sql_info['sql_text']=preg_replace(
                            $pattern, 
                            $value, 
                            $sql_info['sql_text']
                        );
                        // △入====  入力値をＳＱＬ内で再利用する機能 ====

                    }
                }
            }

            foreach($cond_str as $location_no=>$cond){
                $sql_info['sql_text'];
                $pattern='/@'.$location_no.'/';
                $sql_info['sql_text']=preg_replace($pattern, $cond, $sql_info['sql_text']);
            }

        }
        
        log_message('debug',$this->create_dsn($db_info));
        log_message('debug',print_r($db_info,true));

        //echo $sql_info['sql_text'];

        // DB接続用のDSN作成
        $targetDB=$this->load->database($this->create_dsn($db_info),TRUE);

        // クエリ実行＆結果ゲット
        $result=$targetDB->query($sql_info['sql_text'],$values);

        if(!$result){
            return array(false,$targetDB->_error_message());
        }
        
        //print_r($db_info);
        //print_r($sql_info);
        //print_r($_cond);
        //var_dump($result);

        $this->fields=$result->list_fields();
        return array(true,$result->result_array());
    }

    public function list_fields(){
        return $this->fields;
    }

    public function get_name_value_list(){
        return $this->name_value_list;
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

