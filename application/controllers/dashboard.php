<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index()
	{
        $this->load->view('template/navbar_before_login');
		$this->load->view('view_dashboard');
	}
}
?>