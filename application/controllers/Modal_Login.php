<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal_Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('memberModel');
    $this->load->library('Recaptcha');
  }

	public function index()
	{
    $this->load->view('modals/loginModal');
	}

  public function check_Login(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        //run validation check
        $recaptcha = $this->input->post('g_recaptcha_response');

        //$response = $this->recaptcha->verifyResponse($recaptcha);
        //echo strlen($recaptcha);
        if ($this->form_validation->run() == FALSE || strlen($recaptcha) == 0 /*!isset($response['success']) || $response['success'] <> true*/)
        {   //validation fails
          if($this->form_validation->run() == FALSE){
            echo validation_errors();
          }
          if(strlen($recaptcha) == 0){
            echo "</p>Captcha Needed.</p>";
          }
          /*if(!isset($response['success']) || $response['success'] <> true){
            echo "</p>Captcha Needed.</p>";
          }*/
        }
        else
        {
            //get the form data
            $email = $this->input->post('email');
      			$password = $this->input->post('password');
            $query = $this->memberModel->memberCheckEmail($email);
            if($query != false){
              $query = $this->memberModel->memberlogin($email,$password);
              if($query != false){
                echo "Correct";
              }else{
                echo "Wrong Password";
              }
            }else{
              echo "Wrong Email";
            }
        }
  }

  public function check_Forget(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            echo validation_errors();
        }
        else
        {
            //get the form data
            $email = $this->input->post('email');
            $query = $this->memberModel->memberCheckEmail($email);
            if($query != false){
              echo "Correct";
            }else{
              echo "Wrong Email";
            }
        }
  }

}
