<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('db_search/frontpage_model');
	}

   public function index()
	{
  	    $data['sql_list'] = $this->frontpage_model->index($this->tank_auth->get_user_id());		
	
        $this->load->view('include/header');
        $this->load->view('frontpage',$data);
        $this->load->view('include/footer');

	    $data['user_id']	= $this->tank_auth->get_user_id();
	    $data['username']	= $this->tank_auth->get_username();
	    $this->load->view('welcome', $data);
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
