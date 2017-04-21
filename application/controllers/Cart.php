<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct() {
     parent::__construct();
		 if(isset($_SESSION['firstName'])){
 			if(!isset($_SESSION['role'])){
 				redirect('Member/ChooseRole');
 			}else{
				if($_SESSION['role']!='recipient'){
					redirect('');
				}
			}
 		}else{
 			redirect('');
 		}
     $this->load->model('donateModel');
   }

	public function index()
	{
		$list = $this->donateModel->getCartDetail();
		//$amount = count($list);
		$data['list'] = $list;
		$data['title'] = "Cart";
		$this->load->view('template/header',$data);
		$this->load->view('cart',$data);
		$this->load->view('template/footer');
	}

}
