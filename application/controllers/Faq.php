<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct() {
    parent::__construct();
  }

  public function index(){
		if(isset($_SESSION['firstName'])){
			if($this->session->userdata('role') == ""){
				redirect('Member/ChooseRole');
			}
		}
		$data['title'] = "FAQ";
		$this->load->view('template/header',$data);
		$this->load->view('faq');
		$this->load->view('template/footer');
		$this->load->view('modals/loginModal');
	}

}
