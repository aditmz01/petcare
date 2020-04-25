<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_product');
    $this->load->model('m_account');
 }
  
 public function Obat()
	{
    $data_obat = $this->m_product->get_all_obat();
    $this->load->view('template/navbar_after_login');
    $this->load->view('template/v_order_obat', ['data'=>$data_obat]);
  }
  public function Makanan()
	{
    $data_makanan = $this->m_product->get_all_makanan();
    $this->load->view('template/navbar_after_login');
    $this->load->view('template/v_order_makanan', ['data'=>$data_makanan]);
  }

  public function order_obat()
  {
    $data_obat = $this->m_product->get_all_obat();
    $akun = $this->m_account->get_profile($_SESSION['username']);
    $total = $this->input->post("total");
    if($akun['saldo'] < $total){
      $data['error_message'] = '<b>Gagal !</b> Saldo Anda Tidak Mencukupi';
      $this->load->view('template/navbar_after_login',$data);
      $this->load->view('template/v_order_obat',['data'=>$data_obat]);
    } else {
      if($this->m_product->buy_obat($_SESSION['username'])){
        $data['success'] = 'Order Sukses Brader';
        $data_obat = $this->m_product->get_all_obat();
      $this->load->view('template/navbar_after_login',$data);
      $this->load->view('template/v_order_obat', ['data'=>$data_obat]);
      }
    }
  }
  public function order_makanan()
  {
    {
      $data_makanan = $this->m_product->get_all_makanan();
      $akun = $this->m_account->get_profile($_SESSION['username']);
      $total = $this->input->post("total");
      if($akun['saldo'] < $total){
        $data['error_message'] = '<b>Gagal !</b> Saldo Anda Tidak Mencukupi';
        $this->load->view('template/navbar_after_login',$data);
        $this->load->view('template/v_order_makanan',['data'=>$data_makanan]);
      } else {
        if($this->m_product->buy_makanan($_SESSION['username'])){
          //proses pengurangan saldo
          $username = $_SESSION['username'];
          $this->db->query("UPDATE user SET saldo= saldo - $total WHERE username='$username'");
          $data['success'] = 'Order Sukses Brader';
          $data_makanan = $this->m_product->get_all_makanan();
        $this->load->view('template/navbar_after_login',$data);
        $this->load->view('template/v_order_makanan', ['data'=>$data_makanan]);
        }
      }
    } 
  }
}
?>