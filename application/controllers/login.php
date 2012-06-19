<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	function login_exe(){

		$this->session->set_userdata('username', $this->input->post('username'));
		$this->session->set_userdata('password', $this->input->post('password'));

		redirect('auth');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
