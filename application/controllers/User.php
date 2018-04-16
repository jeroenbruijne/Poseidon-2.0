<?php
 
class User extends CI_Controller 
{
 
	public function __construct(){
 
        parent::__construct();
  		$this->load->helper('url');
  		$this->load->model('user_model');
        $this->load->library('session');
 	}

 	//Registratie forumulier op indexpagina
	public function index(){
		$this->load->view("register.php");
	}


	//Haalt de ingevoerde gegevens uit de form
	public function register_user(){
 
      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);
 
 	//
	$email_check=$this->user_model->email_check($user['user_email']);
 
 	//checkt of de email al geregistreerd staat, de gebruiker krijgt een bericht of het registreren succesvol was of niet.
	if($email_check){
  		$this->user_model->register_user($user);
  		$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
 		redirect('index.php');
	}
	else{
  		$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  		redirect('user');
		}
 	}

 	public function login_view(){
		$this->load->view("account/login.php");
 	}

 	function login_user(){
  		$user_login=array(
 
  		'user_email'=>$this->input->post('user_email'),
  		'user_password'=>md5($this->input->post('user_password'))
 		);
 
    	$data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      
      	if($data){
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
 
        //$this->load->view('temperatures/index.php');
        $this->load->view('templates/header');
    $this->load->view('temperatures/index');
    $this->load->view('templates/footer');

      	}
      	else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");
     	}
	}

	function user_profile(){
		$this->load->view('user_profile.php');
 	}

 	public function user_logout(){
 		$this->session->sess_destroy();
  		redirect('account', 'refresh');
	}




  // public function form(){
  //   $this->load->helper('form');
  //   $this->load->library('form_validation');
  //   $this->form_validation->set_rules('name', 'name', 'required');
  //   if ($this->form_validation->run() === FALSE)
  //   {
  //     $this->load->view('templates/header');
  //     $this->load->view('account/login.php');
  //     $this->load->view('templates/footer');
  //     $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  //     redirect('account/login', 'refresh');
  //   }
  //   else
  //   {

  //       $this->session->set_flashdata('success', 'Account geregistreerd');
  //       redirect('account/login', 'refresh');
  //   }
  // }



}
?>