<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class changepassword extends CI_Controller 
{
   function __construct(){
      parent::__construct();
      $this->load->model('m_account');
      $this->load->library('session');
   }
 
   public function index()
      {
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_changepassword'); 
      }
   public function change()
   {
      $getpass = $this->m_account->get_profile($_SESSION['username']);
      
      $input_passlama = $this->input->post('passlama', true);
      $input_passbaru1 = $this->input->post('passbaru', true);
      $input_passbaru2 = $this->input->post('vpassbaru', true);

      $data = [
			"password" => $this->input->post('passbaru', true),
         ];

      if($getpass['password'] == $input_passlama){
         if($input_passbaru1 != $input_passbaru2){
            $data['error_message'] = '<b>Gagal !</b> Password Baru Tidak Cocok';
            $this->load->view('template/navbar_after_login');
            $this->load->view('template/v_changepassword',$data);
         } else {
            if($this->m_account->change_password($_SESSION['username'],$data)){
               $data['success'] = 'Change Password <b></b>Success !</b>';
               $this->load->view('template/navbar_after_login');
               $this->load->view('template/v_changepassword',$data);
            }
         }         
      } else {
         $data['error_message'] = "<b>Gagal !</b> Password Lama salah";
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_changepassword',$data);

      }
   }
}
?>