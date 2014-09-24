<?php
class Main_Controller extends MY_Controller 
{
   protected $authorized_categorys;
   protected $data;

   function __construct()
   {
      parent::__construct();
      
      $this->load->helper('url');
      $this->load->library('tank_auth');
      // $this->output->enable_profiler(TRUE);
      
      if (!$this->tank_auth->is_logged_in()) {
   		echo current_url();
     	if (!strstr(current_url(),'/auth/')){
     		redirect('/auth/login/');
     	}
      }

      $this->data['user_id'] = $this->tank_auth->get_user_id();
      $this->data['username'] = $this->tank_auth->get_username();

      $this->load->model('db_search/dba/category_model');
      $category_rows=$this->category_model->get_all_by_user_id($this->tank_auth->get_user_id(),2);
      $this->authorized_categories=array();
      foreach($category_rows as $row){ // 詰替え
        $this->authorized_categories[]=$row['category_name'];
      } 
   }
    
    protected function load_not_authorized_view(){
        $this->load->view('include/header',$this->data);
        $this->load->view('not_authorized');
        $this->load->view('include/footer');
    }

    protected function is_admin(){
        if($this->tank_auth->get_role()!='admin'){
            if(!$this->tank_auth->get_role()){
                $this->tank_auth->logout();
     		    redirect('/auth/login/');
            }
            return false;
        }
        return true;
    }

    protected function has_authorizezd_categories(){
        if(count($this->authorized_categories)==0){
            return false;
        }
        return true;
    }

}
