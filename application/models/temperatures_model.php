<?php

class temperatures_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_temperatures()
    {
    	$query = $this->db->get('temperatures');

    	return $query->result_array();
    }

}
