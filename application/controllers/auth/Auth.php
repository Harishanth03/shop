<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user/User_Model');
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index()
  {
    $this->load->view('page/auth/Login');
  }

  public function register()
  {
    $this->load->view('page/auth/Register');
  }

  public function save()
  {
    $this->form_validation->set_rules('userName', 'User Name', 'required|trim|is_unique[users.userName]');
    $this->form_validation->set_rules('passWord', 'Password', 'required|min_length[6]');

    if ($this->form_validation->run() == false) {
      $this->load->view('page/auth/Register');
    } else {
      $data = array(
        'userName' => $this->input->post('userName', true),
        'passWord' => password_hash($this->input->post('passWord', true), PASSWORD_DEFAULT)
      );
      $this->User_Model->insertUser($data);
      $this->session->set_flashdata('success', 'User registered successfully.');
      redirect('login');
    }
  }

  public function login()
  {
    if ($this->input->method() != 'post') {
      redirect('login');
      return;
    }

    $userName = $this->input->post('userName', true);
    $password = $this->input->post('password', true);

    $user = $this->User_Model->getUserByUsername($userName);

    if ($user) {
      if (password_verify($password, $user->passWord)) {
        $session_data = array(
          'userId' => $user->id,
          'userName' => $user->userName,
          'loggedIn' => true,
        );

        $this->session->set_userdata($session_data);
        redirect('dashboard');
        return;
      } else {
        $this->session->set_flashdata('error', 'Invalid password.');
        redirect('login');
        return;
      }
    }

    $this->session->set_flashdata('error', 'User not found.');
    redirect('login');
    return;
  }

}