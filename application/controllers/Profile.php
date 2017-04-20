<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
    parent::__construct();
		$this->load->model('profileModel');
  }

  public function index(){
		if(isset($_SESSION['firstName'])){
			if(!isset($_SESSION['role'])){
				//redirect('Member/ChooseRole');
			}
		}else{
			redirect('');
		}
		$data['menu'] = 'true';
		$data['title'] = "Profile";
		$this->load->view('template/header',$data);
		$this->load->view('profile');
		$this->load->view('template/footer');
	}

	public function resetpwd(){
		if(!isset($_SESSION['firstName'])){
			redirect('');
		}
		$data['menu'] = 'true';
		$data['title'] = "Reset Password";
		$this->load->view('template/header',$data);
		$this->load->view('resetpwd');
		$this->load->view('template/footer');
	}

	public function reset_check(){
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|max_length[16]|required');
				$this->form_validation->set_rules('password_check','Password_Check','callback_password_check');
        $this->form_validation->set_rules('confirmpassword', 'ConfirmPassword', 'trim|required|matches[password]');
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            echo validation_errors();
        }
        else
        {
            echo "Correct";

        }
			}

	public function password_check($str){
		 $this->form_validation->set_message('password_check', 'Password pattern is incorrect.');
	   if (preg_match('/[a-z]/', $str) && preg_match('/[A-Z]/', $str) && preg_match('/[!,%,&,@,#,$,^,*,?,_,~]/', $str)) {
	     return TRUE;
	   }
	   return FALSE;
	}

	public function resetSubmit(){

		$password = $this->input->post('password');
		$confirmpassword = $this->input->post('confirmpassword');
		$query = $this->profileModel->resetPassword($password);

		$data['menu'] = 'true';
		$data['title'] = "Profile";
		$this->load->view('template/header',$data);
		$this->load->view('profile');
		$this->load->view('template/footer');
	}
}
