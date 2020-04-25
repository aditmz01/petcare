<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_product');
    $this->load->model('m_account');
    $this->load->helper('url');
 }
  
 public function index(){
     $akun = $this->m_account->get_profile($_SESSION['username']);
     if ($akun['level'] == 'Member'){
            $data = $this->m_account->history($_SESSION['username']);
            $this->load->view('template/navbar_after_login');
            $this->load->view('template/v_history', ['data'=>$data]);
     } else if($akun['level'] == 'Admin'){ 
        $data = $this->m_account->history_all();
        $this->load->view('template/navbar_after_login');
        $this->load->view('v_historyall', ['data'=>$data]);
     }
 }
}
?>