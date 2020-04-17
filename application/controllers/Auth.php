<?php

Class Auth extends CI_Controller {
	
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login_siswa()
	{
		$this->load->view('auth/login_siswa');
	}

	public function aksi_login()
	{
		$post = $this->input->post();

		$data_petugas = [
			'username' => $post['username'],
			'password' => $post['password']
		];

		$cek_petugas = $this->db->get_where('petugas', $data_petugas)->row_array();

		if ($cek_petugas) {

			$data_petugas = [
				'login' => true,
				'id_petugas' => $cek_petugas['id_petugas'],
				'nama_petugas' => $cek_petugas['nama_petugas'],
				'level' => $cek_petugas['level']
			];

			$this->session->set_userdata($data_petugas);

			redirect('jurusan','refresh');
		}else{
			
			echo "<script>alert('Username atau password anda salah')</script>";
			redirect('auth','refresh');
		}
	}

	public function aksi_login_siswa()
	{
		$post = $this->input->post();

		$data_siswa = [
			'nis' => $post['nis']
		];

		$cek_siswa = $this->db->get_where('siswa', $data_siswa)->row_array();

		if ($cek_siswa) {

			$data_siswa = [
				'login' => true,
				'id_siswa' => $cek_siswa['id_siswa'],
				'nama_siswa' => $cek_siswa['nama_siswa'],
				'level' => 'Siswa'
			];

			$this->session->set_userdata($data_siswa);

			redirect('laporan/siswa','refresh');
		}else{
			
			echo "<script>alert('NIS yang anda masukan salah')</script>";
			redirect('login_siswa','refresh');
		}
	}

	public function logout($type)
	{
		$this->session->sess_destroy();

		if ($type == 'petugas') {
			redirect('auth');
		}

		if($type == 'siswa'){
			redirect('login_siswa');
		}
	}
}