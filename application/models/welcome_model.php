<?php
class Welcome_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    function get_user_limt_5()
    {
		$query = $this->db->query('select * from dlr_00100001.dlr_dat_customer_info limit 5');
		return $query;
    }
}
