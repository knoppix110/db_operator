<?php
class Main_Controller extends MY_Controller 
{
   function __construct()
   {
      parent::__construct();
      
      $this->load->helper('url');
      $this->load->library('tank_auth');
      
      if (!$this->tank_auth->is_logged_in()) {
   		echo current_url();
     	if (!strstr(current_url(),'/auth/')){
     		redirect('/auth/login/');
     	}
      }
   }
}
