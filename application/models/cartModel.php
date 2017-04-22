<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CartModel extends CI_Model {

  public function addShoeToCart($recipientID,$shoeID,$amount,$shipMethod,$shipAddress){
    $sql = "INSERT INTO `cart`(`recipientID`, `shoeID` , `amount` , `shipmethod`, `shipaddress`, `datetime`)
            VALUES (?,?,?,?,?,?)";
    $query = $this->db->query($sql,array($recipientID,$shoeID,$amount,$shipMethod,$shipAddress,date("Y-m-d H:i:s")));

    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      $row = $query->row_array();
    }else{
      return false;
    }
  }
}
