<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ProfileModel extends CI_Model {

  public function resetPassword($password){
    if(isset($_SESSION['idNum'])){
      $idNumber = $_SESSION['idNum'];
      $password = md5($password);
      $sql = "UPDATE member SET password = ? WHERE idNumber = ?";
      $query = $this->db->query($sql,array($password,$idNumber));
    }
  }
}
