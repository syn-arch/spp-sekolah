<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
	}

	public function siswa()
	{
		$this->load->view('template/header');
		$this->load->view('dashboard_siswa');
		$this->load->view('template/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */ ?>