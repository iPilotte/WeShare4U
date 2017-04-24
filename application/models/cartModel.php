<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartModel extends CI_Model {

  public function addShoeToCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress){
    $sql = "INSERT INTO `cart`(`recipientID`, `shoeID` , `Camount` , `Cshipmethod`, `Cshipaddress`, `Cdatetime`)
            VALUES (?,?,?,?,?,?)";
    $query = $this->db->query($sql,array($recipientID,$shoeId,$amount,$shipMethod,$shipAddress,date("Y-m-d H:i:s")));
  }

  public function editShoeInCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress){
    $sql = "UPDATE `cart`
            SET `Camount` = ? , `Cshipmethod` = ?, `Cshipaddress` = ?
            WHERE `shoeID` = ? AND `recipientID` = ?";
    $query = $this->db->query($sql,array($amount,$shipMethod,$shipAddress,$shoeId,$recipientID));
  }

  public function checkShoeInCart($recipientID,$shoeId){
    $sql = "SELECT `shoeID`
            FROM `cart`
            WHERE `recipientID` = ? AND `shoeID` = ?";
    $query = $this->db->query($sql,array($recipientID,$shoeId));
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['shoeID'];
    }else{
      return false;
    }
  }

  public function getCartList_Page($recipientID){
    $sql = "SELECT shoesdonate.name , shoesdonate.detail , shoesdonate.amount , shoesdonate.gender , shoesdonate.size , shoesdonate.sizeType , shoesdonate.type  , shoesdonate.imurl , shoesdonate.donorID , cart.recipientID , cart.shoeID , cart.Camount , cart.Cshipmethod , cart.Cshipaddress
            FROM `cart`,`shoesdonate`
            WHERE cart.recipientID = ? AND cart.shoeID = shoesdonate.id";
    $query = $this->db->query($sql,array($recipientID));
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }


  //Header Dropdown
  public function getCartList_Dropdown($recipientID){
    $sql = "SELECT shoesdonate.name , cart.Camount
            FROM `cart`,`shoesdonate`
            WHERE cart.recipientID = ? AND cart.shoeID = shoesdonate.id";
    $query = $this->db->query($sql,array($recipientID));
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getDonateItemAmount(){
    $sql = "SELECT COUNT(id) FROM shoesDonate";
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  //Update Item Amount In Cart
  public function updateShoeAmountInCart($recipientID,$shoeID,$Camount){
    $sql = "UPDATE `cart`
            SET `Camount` = ?
            WHERE `recipientID` = ? AND `shoeID` = ?";
    $query = $this->db->query($sql,array($Camount,$recipientID,$shoeID));
    return $shoeID.'Updated';
  }

  public function getMaxItemAmount($shoeID){
    $sql = "SELECT amount
            FROM `shoesdonate`
            WHERE `id` = ?";
    $query = $this->db->query($sql,array($shoeID));
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['amount'];
    }else{
      return false;
    }
  }

  //Remove Item Form Cart
  public function removeItem($recipientID,$shoeID){
    $sql = "DELETE FROM `cart`
            WHERE `recipientID` = ? AND `shoeID` = ?";
    $query = $this->db->query($sql,array($recipientID,$shoeID));
    return $shoeID.'Removed';
  }

  //Update Item Amount In Cart
  public function updateShippingInCart($recipientID,$shoeID,$Cshipmethod){
    $sql = "UPDATE `cart`
            SET `Cshipmethod` = ?
            WHERE `recipientID` = ? AND `shoeID` = ?";
    $query = $this->db->query($sql,array($Cshipmethod,$recipientID,$shoeID));
    return $shoeID.'Updated';
  }


  //Get PostCode
  public function getPostCode($memberID){
    $sql = "SELECT member.postcode
            FROM `member`
            WHERE idNumber = ?";
    $query = $this->db->query($sql,array($memberID));
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['postcode'];
    }else{
      return false;
    }
  }


  //DonateItem/Detail/xx
  public function getSpecificShoeAmountInCart($recipientID,$shoeID){
    $sql = "SELECT cart.Camount
            FROM `cart`
            WHERE cart.recipientID = ? AND cart.shoeID = ?";
    $query = $this->db->query($sql,array($recipientID,$shoeID));
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['Camount'];
    }else{
      return false;
    }
  }

}
