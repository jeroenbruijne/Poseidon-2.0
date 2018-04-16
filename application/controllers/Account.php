<?php

class Account extends CI_Controller {

	public function __construct()
    {
    	//die('controller/temperatures');
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('account_Model');
        $this->load->library('session');
        $this->load->helper('form');
     }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('account/login');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('account/register');
		$this->load->view('templates/footer');
	}

	public function login_user(){
  		$user_login=array(
 
  		'user_email'=>$this->input->post('user_email'),
  		'user_password'=>md5($this->input->post('user_password'))
 		);
 
    	$data=$this->account_Model->login_user($user_login['user_email'],$user_login['user_password']);
      
      	if($data){
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
 
        //$this->load->view('temperatures/index.php');
        $this->session->set_flashdata('success', 'You are logged in!');
        redirect("home", "refresh");

      	}
      	else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("account/login");
     	}
	}

	public function user_logout(){
 		$this->session->sess_destroy();
  		redirect('account', 'refresh');
	}

	// Haalt de ingevoerde gegevens uit de form
	// public function register_user(){
 
 //      $user=array(
 //      'user_name'=>$this->input->post('user_name'),
 //      'user_email'=>$this->input->post('user_email'),
 //      'user_password'=>md5($this->input->post('user_password')),
 //      'user_age'=>$this->input->post('user_age'),
 //      'user_mobile'=>$this->input->post('user_mobile')
 //        );
 //        print_r($user);
 
 	
	// $email_check=$this->account_Model->email_check($user['user_email']);
 

	// if($email_check){
 //  		$this->account_Model->register_user($user);
 //  		$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
 // 		redirect('account');
	// }
	// else{
 //  		$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
 //  		redirect('account/register');
	// 	}
 // 	}


  public function register_user()
    {
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user_name', 'user_name', 'required');
      $this->form_validation->set_rules('user_age', 'user_age', 'required');
      if ($this->form_validation->run() === FALSE)
      {
        $this->load->view('templates/header');
        $this->load->view('account/register');
        $this->load->view('templates/footer');
      }
      else
      {
          $this->account_Model->register_user($user);     //insert('user', $user);
          $this->session->set_flashdata('success', 'Een nieuwe gebruiker is aangemaakt');
          redirect('account/login', 'refresh');
      }
    }




}