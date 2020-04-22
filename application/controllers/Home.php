<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('m_account');
    $this->load->model('m_product');
    $this->load->library('session');
    $this->load->helper('url');
 }
 
 public function index()
 {
  $this->load->view('template/navbar_after_login');
  $this->load->view('home'); 
 }
 public function obat()
 {
    $data_obat = $this->m_product->get_all_obat();
    $this->load->view('template/navbar_after_login');
    $this->load->view('template/v_obat',['data'=>$data_obat]);
 }

 public function makanan()
 {
   $data_makanan = $this->m_product->get_all_makanan();
   $this->load->view('template/navbar_after_login');
   $this->load->view('template/v_makanan',['data'=>$data_makanan]);
 }
 public function tfsaldo()
 {
   $this->load->view('template/navbar_after_login');
   $this->load->view('template/v_tfsaldo');
 }
 public function logout(){
    $this->session->sess_destroy();
    $this->load->view('template/navbar_before_login');
    $this->load->view('view_dashboard');
}

        //CRUD OBAT
public function tambahobat()
{
    $data = array(
         'id_obat' => '',
         'nama_obat' => $this->input->post('nama_obat'),
         'deskripsi' => $this->input->post('deskripsi'),
         'stok_obat' => $this->input->post('stok_obat'),
         'harga' => $this->input->post('harga'),
         'untuk' => $this->input->post('untuk')
     );
     $this->m_product->tambah_obat($data);
     redirect('home/obat');  
}
public function editobat()
	{
		$data = array(
            'nama_obat' => $this->input->post('nama_obat'),
            'deskprisi' => $this->input->post('deskripsi'),
            'stok_obat' => $this->input->post('stok_obat'),
            'harga' => $this->input->post('harga'),
            'untuk'=> $this->input->post('untuk')
        );
        $this->m_product->edit_obat($this->input->post('id_obat'), $data);
        redirect('home/obat','refresh');
   }
   public function deleteobat($id_obat)
	{
      $this->m_product->hapus_obat($id_obat);
         redirect('Home/obat', 'refresh'); 
   }
   
         //CRUD MAKANAN
   public function tambahmakanan()
{
    $data = array(
      'id_makanan' => '',
      'nama_makanan' => $this->input->post('nama_makanan'),
      'rasa' => $this->input->post('rasa'),
      'harga' => $this->input->post('harga'),
      'untuk'=> $this->input->post('untuk')
     );
     $this->m_product->tambah_makanan($data);
     redirect('home/makanan');  
}
public function editmakanan()
	{
		$data = [
         'id_makanan' => $this->input->post('id_makanan', true),
         'nama_makanan' => $this->input->post('nama_makanan'),
         'rasa' => $this->input->post('rasa'),
         'harga' => $this->input->post('harga'),
         'untuk'=> $this->input->post('untuk')
     ];
        $this->m_product->edit_makanan($this->input->post('id_makanan'), $data);
        redirect('home/makanan','refresh');
   }
   public function deletemakanan($id_makanan)
	{
      $this->m_product->hapus_makanan($id_makanan);
         redirect('Home/makanan', 'refresh'); 
   }

   //saldo account

   public function transfersaldo()
	{
      $username = $_SESSION['username'];
      $tujuan = $this->input->post('tujuan', true);
      $jumlah = $this->input->post('jumlah', true);
      $cek_akun = $this->m_account->get_profile($_SESSION['username']);
      //cek apakah username tujuan ada
      $cek_tujuan = $this->m_account->get_profile($tujuan);
      
      if(!$cek_tujuan){                                    // Jika Akun tujuan tidak ditemukan
         $data['error_message'] = '<b>Gagal ! </b> Username Tujuan tidak ditemukan';
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_tfsaldo',$data);     
      } else if ($cek_akun['saldo'] < $jumlah){            // jika saldo akun tidak mencukupi
         $data['error_message'] = '<b>Gagal ! </b>Saldo Anda Tidak Mencukup';
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_tfsaldo',$data);
      } else if($jumlah < 10000){                   //Jika Nominal TF kurang dari 10.000
         $data['error_message'] = "<b>Gagal ! </b>Minimum Transfer Saldo adalah 10.000";
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_tfsaldo',$data);
      }  else if ($this->m_account->tf_saldo($tujuan, $jumlah)){
         $this->db->query("UPDATE user SET saldo= saldo - $jumlah WHERE username='$username'");
         $data['success'] = "Transfer Saldo Berhasil";
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_tfsaldo',$data);
      }
   }
   public function change_password(){
         $this->load->view('template/navbar_after_login');
         $this->load->view('template/v_changepassword');   
   }
}

?>