<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  // public function checkLogin($userName , $password){
  //   $this->db->where('userName', $userName);
  //   $this->db->where('password', $password);
  //   return $this->db->get('users')->row();
  // }

  public function getUserByUsername($userName){
    $this->db->where('userName', $userName);
    return $this->db->get('users')->row();
  }

  public function insertUser($data)
  {
    return $this->db->insert('users', $data);
  }
}