<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_product');
 }
  
 public function Obat()
	{
        $this->load->view('template/navbar_after_login');
		$this->load->view('template/v_order_obat');
  }
  public function Makanan()
	{
        $this->load->view('template/navbar_after_login');
		$this->load->view('template/v_order_makanan');
  }
}
?>