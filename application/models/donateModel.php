<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DonateModel extends CI_Model {

  public function getDonateItemAmount(){
    $sql = "SELECT COUNT(id) FROM shoesDonate";
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getDonateList($page){
    $end = $page*10;
    $start = $end-10;
    $sql = "SELECT * FROM shoesDonate ORDER BY id DESC LIMIT " . $start ."," . $end;
    $query = $this->db->query($sql);

    //$query = $this->db->get();
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getSearchNameDonateItemAmount($search){
    $sql = "SELECT COUNT(id) FROM shoesDonate WHERE name LIKE '%". $search ."%'"; //name
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function searchByName($search,$page){
    $end = $page*10;
    $start = $end-10;
    $sql = "SELECT * FROM shoesDonate WHERE name LIKE '%". $search ."%' ORDER BY id DESC LIMIT " . $start ."," . $end; //name
    $query = $this->db->query($sql);

    //$query = $this->db->get();
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getSearchTypeDonateItemAmount($search){
    $sql = "SELECT COUNT(id) FROM shoesDonate WHERE type LIKE '%". $search ."%'";  //type
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function searchByType($search,$page){
    $end = $page*10;
    $start = $end-10;
    if(strpos($search,'&')>0){
      //$search = explode('_',$search)[0];
      $search = str_replace(" & ","_",$search);
    }
    $sql = "SELECT * FROM shoesDonate WHERE type LIKE '%". $search ."%' ORDER BY id DESC LIMIT " . $start ."," . $end;  //type
    $query = $this->db->query($sql);
    //echo '<script>alert("'. $sql .'")</script>';

    //$query = $this->db->get();
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getSearchKeywordDonateItemAmount($search){
    $sql = "SELECT COUNT(id) FROM shoesDonate WHERE name LIKE '%". $search ."%'
                                      OR type LIKE '%". $search ."%'
                                      OR size LIKE '%". $search ."%'
                                      OR gender LIKE '%". $search ."%'
                                      OR color LIKE '%". $search ."%'
                                      OR shipmethod LIKE '%". $search ."%'
                                      OR detail LIKE '%". $search ."%'";  //Detail
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function searchByKeyword($search,$page){
    $end = $page*10;
    $start = $end-10;
    $sql = "SELECT * FROM shoesDonate WHERE name LIKE '%". $search ."%'
                                      OR type LIKE '%". $search ."%'
                                      OR size LIKE '%". $search ."%'
                                      OR gender LIKE '%". $search ."%'
                                      OR color LIKE '%". $search ."%'
                                      OR detail LIKE '%". $search ."%'
                                      OR shipmethod LIKE '%". $search ."%' ORDER BY id DESC LIMIT " . $start ."," . $end;  //Detail
    $query = $this->db->query($sql);

    //$query = $this->db->get();
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function getSearchGenderDonateItemAmount($search){
    $sql = "SELECT COUNT(id) FROM shoesDonate WHERE gender LIKE '". $search ."'"; //name
    $query = $this->db->query($sql);
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }

  public function searchByGender($search,$page){
    $end = $page*10;
    $start = $end-10;
    $sql = "SELECT * FROM shoesDonate WHERE gender LIKE '". $search ."' ORDER BY id DESC LIMIT " . $start ."," . $end; //name
    $query = $this->db->query($sql);

    //$query = $this->db->get();
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
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

  public function getSimilarShoe($id,$type){
    //SELECT * FROM shoesdonate WHERE type LIKE 'Fashion_Sneakers' AND id NOT LIKE '6' ORDER BY RAND() LIMIT 5
    $sql = "SELECT * FROM shoesdonate WHERE id NOT LIKE ? AND type LIKE ? ORDER BY RAND() LIMIT 5";
    $query = $this->db->query($sql,array($id,$type));
    if($query->num_rows() >= 1){
      return $query->result_array();
    }else{
      return false;
    }
  }
}
