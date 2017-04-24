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
     $this->load->model('cartModel');
   }

	public function index(){
		$data['title'] = "Cart";
		$this->load->view('template/header',$data);
		$this->load->view('cart',$data);
		$this->load->view('template/footer');
	}

	public function getItemListInCart_Page(){
		$inCart = $this->cartModel->getCartList_Page($_SESSION['idNum']);

		$recipientPostCode = $this->cartModel->getPostCode($_SESSION['idNum']);

		//Check if thereare items in cart
		if(is_array($inCart)){
			$itemAmount = count($inCart);
			echo $itemAmount;
			echo '<br>';
			$count = 1;
			$AmountSum = 0;
			foreach($inCart as $row){
				$cost = 0;
				$postChecked = '';
				$companyChecked = '';
				$itemID = $row['shoeID'];
				$itemImg = $row['imurl'];
				$itemName = $row['name'];
				$itemMaxAmount = $row['amount'];
				//$itemDetail = $row['detail'];
				//$itemGender = $row['gender'];
				//$itemSize = $row['size'];
				//$itemSizeType = $row['sizeType'];
				//$itemType = $row['type'];
				$itemAmountInCart = $row['Camount'];
				//$itemShippingMethod = $row['Cshipmethod'];
				//$itemShippingAddress = $row['Cshipaddress'];

				//If wanna cal costs by postcode
				$itemDonorID = $row['donorID'];
				$donorPostCode = $this->cartModel->getPostCode($itemDonorID);

				echo '<br>';
				echo '<tr>';
				echo	'<td align="center">'. $count .'</td>'; //Count
				echo	'<td align="center"><img class="img-responsive" src="'. base_url($itemImg) .'" alt height="150" width="150"></td>'; //Image
				echo	'<td>';
				echo	'<p>Name : '.$itemName.'</p>';
				if ($row['Cshipmethod'] == 'appointment'){
					echo '<p>Shipping Methods : Appointment</p>';
					echo '<p>Appointment Place : '.$row['Cshipaddress'].'</p>';
				}else {
					if($row['Cshipmethod'] == 'post'){
						$postChecked = 'checked';

						//If Shiomethod = post then Add item to calculate price
						$AmountSum += $itemAmountInCart;
						$cost = $itemAmountInCart*100;
						//$cost = $this->calculatePriceByPostCode($recipientPostCode,$donorPostCode);
					}else if($row['Cshipmethod'] == 'company'){
						$companyChecked = 'checked';
					}
					echo '<span>Shipping Method : </span>';
					echo '<label class="radio-inline control-label"><input type="radio" name="shippingMethod'.$itemID.'" id="shippingMethod'.$itemID.'" onclick="ChangeShippingMethod('.$itemID.',\'post\')" value="post" '.$postChecked.'>Post/Mail</label>';
					echo '<label class="radio-inline control-label"><input type="radio" name="shippingMethod'.$itemID.'" id="shippingMethod'.$itemID.'" onclick="ChangeShippingMethod('.$itemID.',\'company\')" value="company" '.$companyChecked.'>Weshare Company</label>';
					echo '<p></p>'; //Align layout
					//echo '<br><textarea class="form-control" name="shippingAddress'.$itemID.'" id="shippingAddress'.$itemID.'" placeholder="ShippingAddress" style="display: none;">'.$row['Cshipaddress'].'</textarea>';
				}
				echo 	'<p>Shipping costs : '. $cost .' baht';
				if($postChecked == 'checked'){
					echo ' (Postcode : '.$recipientPostCode.') ';
				}
				echo  '</p>';
				echo  '</td>'; //Detail
				echo	'<td align="center"><input type="number" min="1" max="'. $itemMaxAmount . '" class="form-control" id="amount'.$itemID.'" name="amount'.$itemID.'" placeholder="Amount : Pair(s)" value="'.$itemAmountInCart.'" onclick="UpdateItemAmount('.$itemID.')"></td>'; //Edit-Delete
				echo	'<td align="center"><div class="btn-group" role="group" aria-label="Edit/Delete">';
				echo  '<a class="btn btn-info" id="edit'.$itemID.'" href="'. site_url('DonateItem/Detail/'.$itemID).'"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>';
				echo  '<button class="btn btn-danger" id="delete'.$itemID.'" onclick="RemoveItemInCart('.$itemID.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
				echo  '</div></td>'; //Edit-Delete
				echo '</tr>';
				$count++;
			}
			echo '<hr />';
			echo '<br>';
			echo '<br>';

			//Calculate Price
			echo $AmountSum*100;
		}else{
			//No item in cart
			echo '0';
			echo '<br>';
			echo '<br>';
			echo '<div class="row noShoe"><h3>No shoe in cart.</h3></div>';
		}
	}

	public function getItemListInCart_Dropdown(){
		$inCart = $this->cartModel->getCartList_Dropdown($_SESSION['idNum']);

		//Check if thereare items in cart
		if(is_array($inCart)){
			$itemAmount = count($inCart);
			echo $itemAmount;
			echo '<br>';
			foreach($inCart as $row){
				$itemName = $row['name'];
				$itemAmount = $row['Camount'];
				echo '<br>';
				echo '<hr />';
				echo '<span alt ="'.$row['name'].'">';
				//Cut string
				if(strlen($itemName) > 30){
					echo substr($itemName,0,30) . '... ';
				}else{
					echo $itemName;
				}
				echo '  :  '. $itemAmount .' Pair(s) </span>';
			}
			echo '<hr />';
		}else{
			//No item in cart
			echo '0';
			echo '<br>';
			echo '<br>';
			echo '<h4>No shoe in cart.</h4>';
		}
	}

	public function getItemInCartAmount(){
		$inCart = $this->cartModel->getCartList_Dropdown($_SESSION['idNum']);
		if(is_array($inCart)){
			$itemAmount = count($inCart);
			echo $itemAmount;
		}else{
			echo "0";
		}
	}

	public function getShoeToCart(){
		$recipientID = $_SESSION['idNum'];

		$shoeId = $this->input->post('shoeId');
		$amount = $this->input->post('amount');
		$shipMethod = $this->input->post('shipMethod');
		$shipAddress = $this->input->post('shipAddress');

		$itemMaxAmount = $this->cartModel->getMaxItemAmount($shoeId);

		//Check if not exits in cart
		$checkShoeInCart = $this->cartModel->checkShoeInCart($recipientID,$shoeId);

		//If input > max then input = max
		if($amount > $itemMaxAmount){
			$amount = $itemMaxAmount;
		}
		if((is_numeric($amount)) && ($amount >= 1) && ($amount <= $itemMaxAmount)){
			if(!isset($checkShoeInCart) || $checkShoeInCart==""){
				$this->cartModel->addShoeToCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress);
				echo $shoeId . "Added";
			}else{
				$this->cartModel->editShoeInCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress);
				echo $checkShoeInCart . ": Edited";
			}
		}
	}

	public function updateItemAmount(){
		$recipientID = $_SESSION['idNum'];
		$shoeID = $this->input->post('shoeID');
		$CamountNew = $this->input->post('Camount');
		$itemMaxAmount = $this->cartModel->getMaxItemAmount($shoeID);

		if((is_numeric($CamountNew)) && ($CamountNew >= 1) && ($CamountNew <= $itemMaxAmount)){
			$updateCart = $this->cartModel->updateShoeAmountInCart($recipientID,$shoeID,$CamountNew);
			echo $updateCart;
		}
	}

	public function updateShipping(){
		$recipientID = $_SESSION['idNum'];
		$shoeID = $this->input->post('shoeID');
		$Cshipmethod = $this->input->post('shippingMethod');
		$updateCart = $this->cartModel->updateShippingInCart($recipientID,$shoeID,$Cshipmethod);
		echo $updateCart;
	}

	public function removeItemFormCart(){
		$recipientID = $_SESSION['idNum'];
		$shoeID = $this->input->post('shoeID');

		$removeItemInCart = $this->cartModel->removeItem($recipientID,$shoeID);
		echo $removeItemInCart;
	}

	public function calculatePriceByPostCode($recipientPostCode,$donorPostCode){
		$cost = 0;
		return $cost;
	}

}
