<?php

Class petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('auth','refresh');
		}
	}

	public function index()
	{
		$data['petugas'] = $this->db->get('petugas')->result_array();

		$this->load->view('template/header');
		$this->load->view('petugas/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('petugas/tambah');
		$this->load->view('template/footer');
	}

	public function aksi_tambah()
	{
		$post = $this->input->post();

		$data = [
			'nama_petugas' => $post['nama_petugas'],
			'username' => $post['username'],
			'password' => $post['password'],
			'level' => $post['level']
		];

		$this->db->insert('petugas', $data);

		redirect('petugas');
	}

	public function hapus($id)
	{
		$this->db->delete('petugas', ['id_petugas' => $id]);

		redirect('petugas','refresh');
	}

	public function ubah($id)
	{
		$data['petugas'] = $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();

		$this->load->view('template/header');
		$this->load->view('petugas/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nama_petugas' => $post['nama_petugas'],
			'username' => $post['username'],
			'password' => $post['password'],
			'level' => $post['level']
		];

		$this->db->where('id_petugas', $id);
		$this->db->update('petugas', $data);

		redirect('petugas','refresh');
	}

}