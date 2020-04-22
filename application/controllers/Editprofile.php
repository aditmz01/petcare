<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editprofile extends CI_Controller 
{
   function __construct(){
      parent::__construct();
      $this->load->model('m_account');
      $this->load->library('session');
   }
 
   public function index()
      {
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_editprofile'); 
      }
   public function edit()
   {
      $data = [
         "nama" => $this->input->post('nama', true),
         "username" => $this->input->post('username', true),
         "nohp" => $this->input->post('nohp', true),
      ];
      if ($this->m_account->edit_profile($_SESSION['username'], $data)){
            $data['success'] = "Edit Data Berhasil";
            $this->load->view('template/navbar_after_login');
            $this->load->view('home',$data);
      }
   }
}
?>