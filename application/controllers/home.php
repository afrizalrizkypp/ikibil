<?php
class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
	}
	
	function index()
	{
		$this->load->view('home_view');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('home/index');
	}
	
	public function userr()
		{
			// load the user_model
			$this->load->model('user_model');
			// call the model function to get the user data
			$user_result = $this->user_model->get_user_list();

			$data['userlist'] = $user_result;
			// load the user_View
			$this->load->view('user_view',$data);
		}
}


