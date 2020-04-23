<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_account');
    $this->load->library('session');
 }
 
 public function index()
 {
  $this->load->view('template/navbar_before_login');
  $this->load->view('template/v_login'); 
 }
 
 public function aksi_login(){
  $data['username'] = $this->input->post('username');
  $data['password'] = $this->input->post('password');
 if($this->m_account->login($data)) {
   $this->session->set_userdata('username', $this->input->post('username'));
   $this->session->set_userdata('passwprd', $this->input->post('password'));

   $data = $this->m_account->get_profile($this->input->post('username'));
    if($data['level'] == 'Admin'){                         /// Apabila login sebagai admin
      $this->load->view('template/navbar_after_login');
      $this->load->view('home', $data);
    } else if ($data['level'] == "Member"){                /// Apabila Login sebagai member
      $this->load->view('template/navbar_after_login');
      $this->load->view('template/index', $data);
    }
   
 } else {
  $data['error_message'] = "invalid username or password";
  $this->load->view('template/navbar_before_login');
  $this->load->view('template/v_login', $data); 
 }
}
}
?>