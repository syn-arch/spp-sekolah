<?php

Class spp extends CI_Controller {

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
		$data['spp'] = $this->db->get('spp')->result_array();

		$this->load->view('template/header');
		$this->load->view('spp/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$this->load->view('template/header');
		$this->load->view('spp/tambah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_tambah()
	{
		$post = $this->input->post();

		$data = [
			'nominal' => $post['nominal'],
			'id_jurusan' => $post['id_jurusan'],
			'tahun_pendaftaran' => $post['tahun_pendaftaran']
		];

		$this->db->insert('spp', $data);

		redirect('spp');
	}


	public function hapus($id)
	{
		$data = [
			'id_spp' => $id
		];

		$this->db->delete('spp', $data);

		redirect('spp','refresh');
	}

	public function ubah($id)
	{
		$data = [
			'id_spp' => $id
		];

		$data['spp'] = $this->db->get_where('spp', $data)->row_array();

		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$this->load->view('template/header');
		$this->load->view('spp/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nominal' => $post['nominal'],
			'id_jurusan' => $post['id_jurusan'],
			'tahun_pendaftaran' => $post['tahun_pendaftaran']
		];

		$this->db->where('id_spp', $id);
		$this->db->update('spp', $data);

		redirect('spp','refresh');
	}

}