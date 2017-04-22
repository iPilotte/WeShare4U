<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartModel extends CI_Model {

  public function addShoeToCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress){
    $sql = "INSERT INTO `cart`(`recipientID`, `shoeID` , `amount` , `shipmethod`, `shipaddress`, `datetime`)
            VALUES (?,?,?,?,?,?)";
    $query = $this->db->query($sql,array($recipientID,$shoeId,$amount,$shipMethod,$shipAddress,date("Y-m-d H:i:s")));
  }

  public function editShoeInCart($recipientID,$shoeId,$amount,$shipMethod,$shipAddress){
    $sql = "UPDATE `cart`
            SET `amount` = ? , `shipmethod` = ?, `shipaddress` = ?
            WHERE `shoeID` = ? AND `recipientID` = ?";
    $query = $this->db->query($sql,array($amount,$shipMethod,$shipAddress,$shoeId,$recipientID));
  }

  public function checkShoeInCart($recipientID,$shoeId){
    $sql = "SELECT  `shoeID`
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

  public function getCartList($recipientID){
    $sql = "SELECT *
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

}
