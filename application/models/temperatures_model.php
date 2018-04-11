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

    function create_temperature($sensor, $datetime, $temperature)
    {
        $data = array(
            'datetime' => $datetime, //TODO: Possible timezone problems when used internationally 
            'temperature' => $temperature,
            'name_sensor' => $sensor
        );

        $this->db->insert('temperatures', $data);

        return true; // TODO: Error handling
    }

    function get_latest_temperatures()
    {
        //$this->db->select('id');
        $this->db->select('temperature');
        $this->db->select('datetime');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(100);

        $query = $this->db->get('temperatures');

        return $query->result_array();
    }

    function insert_temperature()
    {
        $data = array(
            'datetime' => $this->input->post('dateandtime'),
            'temperature' => $this->input->post('temperature')
        );

        return $this->db->insert('temperatures', $data);
    }

    function get_sensors(){
         $this->db->select('name_sensor');
         $query = $this->db->get('temperatures');

         return $query->result_array();
    }

}
