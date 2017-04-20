<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MemberModel extends CI_Model {

  public function memberLogin($email,$password){
    $password = md5($password);
    $sql = "SELECT * FROM member WHERE email = ? and password = ? LIMIT 1";
    $query = $this->db->query($sql,array($email, $password));

    //$query = $this->db->get();
    if($query->num_rows() == 1){
      return $query;
    }else{
      return false;
    }
  }

  public function memberCheckEmail($email){
    $sql = "SELECT * FROM member WHERE email = ? LIMIT 1";
    $query = $this->db->query($sql,array($email));

    //$query = $this->db->get();
    if($query->num_rows() == 1){
      return $query;
    }else{
      return false;
    }
  }

  public function memberForgetCheck($email,$question,$answer){
    $sql = "SELECT * FROM member WHERE email = ? and question = ? and answer = ? LIMIT 1";
    $query = $this->db->query($sql,array($email,$question,$answer));

    //$query = $this->db->get();
    if($query->num_rows() == 1){
      return $query;
    }else{
      return false;
    }
  }

  public function resetPassword($email,$password){
    if(isset($email)){
      $password = md5($password);
      $sql = "UPDATE member SET password = ? WHERE email = ?";
      $query = $this->db->query($sql,array($password,$email));
    }
  }
}
