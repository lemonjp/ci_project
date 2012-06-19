<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backyard extends CI_Controller {

	function __construct() {
		parent::__construct();

		if( $this->session->userdata('auth_status') !== "TRUE" ) {
			$this->session->set_userdata('access_uri', $this->uri->uri_string());
			redirect(auth);
		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function makeusers()
	{
		$this->load->model('Makeusers_model');

		$query = $this->Makeusers_model->get_user_limt_5(); 

		$data['users'] = $query->result_array();
		 
		$this->load->view('backyard/makeusers', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
