<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatures extends CI_Controller {

	public function __construct()
    {
    	//die('controller/temperatures');
        parent::__construct();
        $this->load->helper('url_helper');
     }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('temperatures/index');
		$this->load->view('templates/footer');
	}
}