<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();

		if( $this->session->userdata('auth_status') !== "TRUE" ) {
			$this->session->set_userdata('access_uri', $this->uri->uri_string());
			redirect(auth);
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function foobar()
	{
		$this->load->model('Welcome_model');

		$query = $this->Welcome_model->get_user_limt_5(); 

		$data['users'] = $query->result_array();
		 
		$this->load->view('welcome_foobar', $data);
	}

	public function dashboard()
	{
		$this->load->model('Welcome_model');

		$query = $this->Welcome_model->get_user_limt_5(); 

		$data['users'] = $query->result_array();
		 
		$this->load->view('welcome/dashboard', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
