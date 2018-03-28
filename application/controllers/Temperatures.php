<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Temperatures extends CI_Controller {
	public function __construct()
    {
    	//die('controller/temperatures');
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('temperatures_model');
        $this->load->library('session');
        date_default_timezone_set('Europe/Amsterdam');
    }


	public function index()
	{
		$data['temperatures'] = $this->temperatures_model->get_latest_temperatures();
		$this->load->view('templates/header');
		$this->load->view('temperatures/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function demo_data()
	{
		//function create_temperature($sensor, $datetime, $temperature)
		//$d = date('Y-m-d H:i:s');
		$d = new Datetime();
		//$temp = rand(150, 250) / 10;
		$temp = 21.3;
		$signs = array('-', '+');
		$t = rand(1, 10) / 10;
		
		for($i=0; $i < 100; $i++) {
		date_sub($d, date_interval_create_from_date_string('5 minutes')); 
		$t = rand(1, 10) / 10;
		$new = $temp + ($signs[rand(0,1)] . $t);
		 $this->temperatures_model->create_temperature('sensor_1', date_format($d, 'Y-m-d H:i:s'), $new);
		}
		die('demo');
	}
	public function demo_temperatures()
	{
		$temp = $this->temperatures_model->get_latest_temperatures();
		return $temp;
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('dateandtime', 'datetime', 'required');
		$this->form_validation->set_rules('temperature', 'temperature', 'required|greater_than_equal_to[15]|less_than_equal_to[25]');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('temperatures/create');
			$this->load->view('templates/footer');
		}
		else
		{
		    $this->temperatures_model->insert_temperature();
		    $this->session->set_flashdata('success', 'Een nieuwe temperatuur is aangemaakt!');
		    redirect('temperatures/index', 'refresh');
		}
	}
}