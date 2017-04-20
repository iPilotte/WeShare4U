<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('memberModel');
		$this->load->library('Recaptcha');
  }

	public function index(){

	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$query = $this->memberModel->memberLogin($email,$password);
		if($query != false){
			$row = $query->row();
			$this->session->set_userdata("idNum",$row->idNumber);
			$this->session->set_userdata("firstName",$row->firstName);
			$this->session->set_userdata("lastName",$row->lastName);
			$this->session->set_userdata("login","true");
			redirect('Member/ChooseRole');
		}else{
			redirect('');
		}
	}

  public function logout()
  {
    $this->session->sess_destroy();
		redirect('');
  }

	public function chooseRole()
	{
		if(isset($_SESSION['firstName'])){
			if(isset($_SESSION['role'])){
				redirect('');
			}else{
				$data['title'] = "Choose Your Role";
				$this->load->view('template/header',$data);
				$this->load->view('role');
				$this->load->view('template/footer');
			}
		}else{
			redirect('');
		}
	}

	public function setRole($role)
	{
		//echo $role;
		if($role == "donor" || $role == "recipient"){
			$this->session->set_userdata("role",$role);
			if($role=="recipient"){
				redirect('DonateItem');
			}
			else{
				redirect('Donation');
			}
		}
	}

	public function forgetPassword(){
		//$email = $this->input->post('email');
		$data['email'] = $this->input->post('email');
		if(isset($data['email'])){
			$data['title'] = "Forget Password";
			$this->load->view('template/header',$data);
			$this->load->view('forgetpwd', $data);
			$this->load->view('template/footer');
			$this->load->view('modals/loginModal');
		}else {
			redirect('');
		}
	}

	public function forget_check(){
		//$email = $this->input->post('email');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('question', 'Question', 'trim|required');
		$this->form_validation->set_rules('answer', 'Answer', 'trim|required');
		//run validation check
		if ($this->form_validation->run() == FALSE)
		{   //validation fails
				echo validation_errors();
		}
		else
		{
				$email = $this->input->post('email');
				$question = $this->input->post('question');
				$answer = $this->input->post('answer');
				$query = $this->memberModel->memberForgetCheck($email,$question,$answer);
				if($query != false){
				echo "Correct";
				}else{
				echo "Incorrect";
				}
			}
		}

		public function resetpwd(){
			$data['title'] = "Reset Password";
			$data['email'] = $this->input->post('email');
			$this->load->view('template/header',$data);
			$this->load->view('resetpwd',$data);
			$this->load->view('template/footer');
		}

		public function resetSubmit(){

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$confirmpassword = $this->input->post('confirmpassword');
			//echo $email . $password . $confirmpassword;
			if($password == $confirmpassword){
				$query = $this->memberModel->resetPassword($email,$password);
				redirect('');
			}

		}
}
