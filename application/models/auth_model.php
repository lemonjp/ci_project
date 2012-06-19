<?php
class Auth_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    function get_user_info( $userid )
    {
		print $userid;
		$sql = "select * from dlr_00100001.dlr_dat_dealer_worker where login_id = '$userid' ";
		$query = $this->db->query( $sql );
		return $query;
    }
}
