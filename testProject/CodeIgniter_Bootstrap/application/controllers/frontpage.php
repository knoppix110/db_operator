<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {
	
	function __construct(){
		parent::__construct();
	}

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');

	  $data['user_id']	= $this->tank_auth->get_user_id();
	  $data['username']	= $this->tank_auth->get_username();
	  $this->load->view('welcome', $data);
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
