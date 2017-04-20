<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {

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
				if($_SESSION['role']!='donor'){
					redirect('');
				}
			}
 		}else{
 			redirect('');
 		}
     $this->load->model('donationModel');
   }

	public function index()
	{
		//$list = $this->donateModel->getDonateList();
		//$data['list'] = $list;
		$data['title'] = "Donation";
		$this->load->view('template/header',$data);
		$this->load->view('donation');
		$this->load->view('template/footer');
		$this->load->view('modals/sizeChartModal');
	}

	public function uploadImg(){
		$config['upload_path'] = 'user_upload/shoes/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = 4096;
    $config['max_width'] = 4096;
    $config['max_height'] = 4096;
		$config['overwrite'] = TRUE;
		//$config['encrypt_name'] = TRUE;
		if(isset($_SESSION['IsEdit'])){
			$new_name = $this->donationModel->getLastDonate();
		}else{
			$new_name = $this->donationModel->getLastDonate() + 1; //Get Next id for insert
		}
		$config['file_name'] = $new_name;
		$config['remove_spaces'] = TRUE;

    $this->load->library('upload', $config);

		if ($this->upload->do_upload('imgFile')) {
			return "/user_upload/shoes/" .$this->upload->data('file_name');
		} else {
			return '0';
		} // End else
	}

	public function addShoe(){
		//$this->session->set_flashdata('item', '1');
		//redirect('Donation/detail');
		$shoeImgFile = $this->input->post('imgFile');
		$shoeName = $this->input->post('name');
		$gender = $this->input->post('gender');
		$shoeDetail = $this->input->post('detail');
		$shoeColor = $this->input->post('color');
		$shoeColor2 = $this->input->post('color2');
		if($shoeColor2!=''){
			$shoeColor = $shoeColor .'/'. $shoeColor2;
		}
		$shoeType = $this->input->post('type');
		$shoeAmount = $this->input->post('amount');
		$shoeSize = $this->input->post('size');
		$shoeSizeType = $this->input->post('sizeType');
		$shoeMethod = $this->input->post('shippingMethod');
		$shipAddress = $this->input->post('shippingAddress');
		$shoeImgURL = $this->uploadImg($shoeImgFile);
		$lastShoeID = $this->donationModel->addShoe($shoeName,$shoeDetail,$gender,$shoeColor,$shoeType,$shoeAmount,$shoeSize,$shoeSizeType,$shoeMethod,$shipAddress,$shoeImgURL);

		//$lastShoeID = $this->donationModel->getLastDonate();
		$this->session->set_userdata('shoe', $lastShoeID);
		redirect('Donation/detail/');
	}

	public function check_Donation(){
        $this->form_validation->set_rules('imgFile', 'Image', 'required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('color', 'Color', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('size', 'Size', 'trim|required|callback_number_check');
        //$this->form_validation->set_rules('shippingAddress', 'ShippingAddress', 'trim|required');
        //run validation check

        //echo strlen($recaptcha);
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            echo validation_errors();
        }
        else
        {
          echo 'Correct';
        }
  }

	public function check_EditDonation(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('color', 'Color', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('size', 'Size', 'trim|required|callback_number_check');
        //$this->form_validation->set_rules('shippingAddress', 'ShippingAddress', 'trim|required');
        //run validation check

        //echo strlen($recaptcha);
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            echo validation_errors();
        }
        else
        {
          echo 'Correct';
        }
  }

	function number_check($str){
		if($str != ''){
			if (is_numeric($str) && ($str > 0)){
				return TRUE;
	    }else{
				$this->form_validation->set_message('number_check', 'The {field} field must be number and greater than 0.');
				return FALSE;
	    }
		}
	}

	public function detail(){
		$shoeID = $this->session->userdata('shoe');
		$data['shoe'] = $this->donationModel->getShoeDetail($shoeID);
		$data['title'] = "Donation Detail ";
		$this->load->view('template/header',$data);
		$this->load->view('donationdetail',$data);
		$this->load->view('template/footer');
	}

	public function edit(){
		$shoeID = $this->session->userdata('shoe');
		$data['shoe'] = $this->donationModel->getShoeDetail($shoeID);
		$data['title'] = "Edit Donation";
		$this->load->view('template/header',$data);
		$this->load->view('donationedit',$data);
		$this->load->view('template/footer');
		$this->load->view('modals/sizeChartModal');
	}

	public function editShoe(){
		$shoeID = $this->input->post('id');
		$shoeImgFile = $this->input->post('imgFile');
		$shoeName = $this->input->post('name');
		$gender = $this->input->post('gender');
		$shoeDetail = $this->input->post('detail');
		$shoeColor = $this->input->post('color');
		$shoeColor2 = $this->input->post('color2');
		if($shoeColor2!=''){
			$shoeColor = $shoeColor .'/'. $shoeColor2;
		}
		$shoeType = $this->input->post('type');
		$shoeAmount = $this->input->post('amount');
		$shoeSize = $this->input->post('size');
		$shoeSizeType = $this->input->post('sizeType');
		$shoeMethod = $this->input->post('shippingMethod');
		$shipAddress = $this->input->post('shippingAddress');

		$this->session->set_userdata('IsEdit', 'Yes');
		$shoeImgURL = $this->uploadImg($shoeImgFile);
		$this->session->unset_userdata('IsEdit');
		$result = $this->donationModel->editShoe($shoeID,$shoeName,$shoeDetail,$gender,$shoeColor,$shoeType,$shoeAmount,$shoeSize,$shoeSizeType,$shoeMethod,$shipAddress,$shoeImgURL);

		$this->session->set_userdata('shoe', $shoeID);
		redirect('Donation/detail');
	}
}
