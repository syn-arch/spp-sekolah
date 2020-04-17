<?php

Class siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('auth','refresh');
		}
	}
	
	public function index()
	{

						 $this->db->join('jurusan', 'id_jurusan');
						 $this->db->join('kelas', 'id_kelas');
		$data['siswa'] = $this->db->get('siswa')->result_array();

		$this->load->view('template/header');
		$this->load->view('siswa/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$this->load->view('template/header');
		$this->load->view('siswa/tambah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_tambah()
	{
		$post = $this->input->post();

		$data = [
			'nama_siswa' => $post['nama_siswa'],
			'id_jurusan' => $post['id_jurusan'],
			'id_kelas' => $post['id_kelas'],
			'nis' => $post['nis'],
			'tahun_pendaftaran' => $post['tahun_pendaftaran']
		];

		$this->db->insert('siswa', $data);

		redirect('siswa');
	}


	public function hapus($id)
	{
		$data = [
			'id_siswa' => $id
		];

		$this->db->delete('siswa', $data);

		redirect('siswa','refresh');
	}

	public function ubah($id)
	{
		$data = [
			'id_siswa' => $id
		];

		$data['siswa'] = $this->db->get_where('siswa', $data)->row_array();

		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$this->load->view('template/header');
		$this->load->view('siswa/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nama_siswa' => $post['nama_siswa'],
			'id_jurusan' => $post['id_jurusan'],
			'id_kelas' => $post['id_kelas'],
			'nis' => $post['nis'],
			'tahun_pendaftaran' => $post['tahun_pendaftaran']
		];

		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);

		redirect('siswa','refresh');
	}

}