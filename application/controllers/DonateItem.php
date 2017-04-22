<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonateItem extends CI_Controller {

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
		 $this->load->model('cartModel');
   }

	public function index()
	{
		$list = $this->donateModel->getDonateList(1);
		$amount = $this->donateModel->getDonateItemAmount();
		$data['cartList'] = $this->cartModel->getCartList($_SESSION['idNum']);
		$data['list'] = $list;
		$data['amount'] = $amount;
		$data['title'] = "DonateItem";
		$data['page'] = 1;
		$this->load->view('template/header',$data);
		$this->load->view('donateitem',$data);
		$this->load->view('template/footer');
	}

	public function Page($page)
	{
		$list = $this->donateModel->getDonateList($page);
		$amount = $this->donateModel->getDonateItemAmount();
		$data['cartList'] = $this->cartModel->getCartList($_SESSION['idNum']);
		$data['list'] = $list;
		$data['title'] = "DonateItem";
		$data['page'] = $page;
		$amount = $this->donateModel->getDonateItemAmount();
		$data['amount'] = $amount;
		$this->load->view('template/header',$data);
		$this->load->view('donateitem',$data);
		$this->load->view('template/footer');
	}

	public function Search(){
		//$search = $this->input->post('search');
		//$searchMethod = $this->input->post('method');
		$search = $this->input->get('search');
		$page = $this->input->get('page');
		$searchMethod = $this->input->get('method');
		if($search==''){
			redirect('DonateItem');
		}
		$list = null;
		$amount = null;
		if($searchMethod == '1'){
			$list = $this->donateModel->searchByName($search,$page);
			$amount = $this->donateModel->getSearchNameDonateItemAmount($search);
		}else if($searchMethod == '2'){
			$list = $this->donateModel->searchByType($search,$page);
			$amount = $this->donateModel->getSearchTypeDonateItemAmount($search);
		}else if($searchMethod == '3'){
			$list = $this->donateModel->searchByKeyword($search,$page);
			$amount = $this->donateModel->getSearchKeywordDonateItemAmount($search);
		}

		$data['cartList'] = $this->cartModel->getCartList($_SESSION['idNum']);
		$data['list'] = $list;
		$data['title'] = "DonateItem Search : " . $search;
		$data['amount'] = $amount;
		$this->load->view('template/header',$data);
		$this->load->view('donateitem',$data);
		$this->load->view('template/footer');
	}

	public function Category($type,$page)
	{
		$list = null;
		$amount = null;
		if($type=='Men' || $type=='Women' || $type=='Boys' || $type=='Girls' || $type=='Baby'){
			$list = $this->donateModel->searchByGender($type,$page);
			$amount = $this->donateModel->getSearchGenderDonateItemAmount($type);
		}else{
			$list = $this->donateModel->searchByType($type,$page);
			$amount = $this->donateModel->getSearchTypeDonateItemAmount($type);
		}
		$data['cartList'] = $this->cartModel->getCartList($_SESSION['idNum']);
		$data['list'] = $list;
		$data['title'] = "DonateItem Category : " . $type;
		$data['page'] = $page;
		$data['amount'] = $amount;
		$data['category'] = $type;
		$this->load->view('template/header',$data);
		$this->load->view('donateitem',$data);
		$this->load->view('template/footer');
	}

	public function Detail($id){
		$data['id'] = $id;
		$data['cartList'] = $this->cartModel->getCartList($_SESSION['idNum']);
		$shoeDetail = $this->donateModel->getShoeDetail($id);
		$data['shoe'] = $shoeDetail;

		$shoeType = $shoeDetail['type'];
		$data['similar'] = $this->donateModel->getSimilarShoe($id,$shoeType);

		$data['title'] = "DonateDetail : " . $data['shoe']['name'];
		$this->load->view('template/header',$data);
		$this->load->view('donatedetail',$data);
		$this->load->view('template/footer');
	}
}
