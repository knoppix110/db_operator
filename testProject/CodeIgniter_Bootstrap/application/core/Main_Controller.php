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
        $this->authorized_categories=$this->category_model->get_editable_categories();
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

    protected function is_unauthorized_user(){
        if( !$this->is_admin() && count($this->authorized_categories)==0 ){
            $this->load_not_authorized_view();
            return true;
        }
        return false;
    }
}
