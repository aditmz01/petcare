<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_account');
 }
 
 public function index()
 {
  $this->load->view('template/navbar_before_login');
  $this->load->view('template/v_register'); 
 }
 
 public function register()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"nohp" => $this->input->post('nohp', true),
			"level" => "Member"
    ];
    $already_exist = $this->m_account->check_username($data['username']);  
    $cekuser=  false;
    if (!$already_exist) { 
      $cekuser = true;
    }
    if($cekuser) {
      $this->m_account->insert_user($data);
      $data['success'] = 'Register New Account <b>Success !</b>';
      $this->load->view('template/navbar_before_login');
      $this->load->view('template/v_register',$data); 
  } else {
    $data['error_message'] = '<b>Gagal ! </b>Username already exist';
    $this->load->view('template/navbar_before_login');
    $this->load->view('template/v_register',$data); 
   }
  }
}
?>