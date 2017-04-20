<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DonationModel extends CI_Model {

  public function getLastDonate(){
    $sql = "SELECT id FROM shoesDonate ORDER BY id DESC LIMIT 1";
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['id'];
    }else{
      return false;
    }
  }

  public function addShoe($shoeName,$shoeDetail,$gender,$shoeColor,$shoeType,$shoeAmount,$shoeSize,$shoeSizeType,$shoeMethod,$shipAddress,$shoeImgURL){
    $sql = "INSERT INTO `shoesdonate`(`name`, `detail` , `gender` , `size`, `sizeType`, `type`, `amount`, `imurl`, `shipmethod`, `shipaddress`, `color`, `datetime`)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $query = $this->db->query($sql,array($shoeName,$shoeDetail,$gender,$shoeSize,$shoeSizeType,$shoeType,$shoeAmount,$shoeImgURL,$shoeMethod,$shipAddress,$shoeColor,date("Y-m-d H:i:s")));

    $sql = "SELECT id FROM shoesDonate ORDER BY id DESC LIMIT 1";
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row['id'];
    }else{
      return false;
    }

  }

  public function editShoe($shoeID,$shoeName,$shoeDetail,$gender,$shoeColor,$shoeType,$shoeAmount,$shoeSize,$shoeSizeType,$shoeMethod,$shipAddress,$shoeImgURL){
    if(isset($shoeID)){
      if($shoeMethod!='appointment'){
        $shipAddress = '';
      }
      if($shoeImgURL!='0'){
        $sql = "UPDATE `shoesDonate` SET name = ? , detail = ? , gender = ? , size = ? , sizeType = ? , type = ? , amount = ?, imurl = ?,
                shipmethod = ? , shipaddress = ? , color = ?
                WHERE id = ?";
        $query = $this->db->query($sql,array($shoeName,$shoeDetail,$gender,$shoeSize,$shoeSizeType,$shoeType,$shoeAmount,$shoeImgURL,$shoeMethod,$shipAddress,$shoeColor,$shoeID));
      }
      else{
        $sql = "UPDATE `shoesDonate` SET name = ? , detail = ? , gender = ? , size = ? , sizeType = ? , type = ? , amount = ?,
                shipmethod = ? , shipaddress = ? , color = ?
                WHERE id = ?";
        $query = $this->db->query($sql,array($shoeName,$shoeDetail,$gender,$shoeSize,$shoeSizeType,$shoeType,$shoeAmount,$shoeMethod,$shipAddress,$shoeColor,$shoeID));
      }
    }
    return $shoeID;
  }

  public function getShoeDetail($shoeID){
    $sql = "SELECT * FROM shoesDonate WHERE id = ?";
    $query = $this->db->query($sql,array($shoeID));
    if($query->num_rows() >= 1){
      $row = $query->row_array();
      return $row;
    }else{
      return false;
    }
  }

}
