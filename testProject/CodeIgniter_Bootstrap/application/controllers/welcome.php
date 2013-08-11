<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Main_Controller
{
	function __construct()
	{
		log_message('DEBUG','######################test1');
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		log_message('DEBUG','##test2');
	}

	function index()
	{
		log_message('DEBUG','##test3');
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('welcome', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */