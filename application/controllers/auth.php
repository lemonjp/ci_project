<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->model('Auth_model');

		$query = $this->Auth_model->get_user_info( $this->session->userdata('username') ); 

		if ($query->num_rows() > 0)
		{
			$user = $query->row(); 
			if( $this->session->userdata('username') == $user->login_id &&
				$this->session->userdata('password') == $user->login_pwd) 
			{
				$this->session->set_userdata('auth_status', 'TRUE');
				if ($this->session->userdata('access_uri')) {
					redirect( $this->session->userdata('access_uri') );
				}else{
					redirect( 'welcome/dashboard' );
				}
			} else {
				redirect(login);
			}
		}else{
			redirect(login);
		}
	}

	public function logout() {

		$remove_session = array(
				'session_id'=>'',
				'ip_address'=>'',
				'user_agent'=>'',
				'last_activity'=>'',
				'username'=>'',
				'password'=>'',
				'access_uri'=>'',
				'auth_status'=>'',
			);
		$this->session->unset_userdata($remove_session);
		redirect(login);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
