<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('home');
		}
	}

	public function index()
	{
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$id_kelas = $this->input->get('id_kelas');
		$bulan_dibayar = $this->input->get('bulan_dibayar');
		$tahun_pendaftaran = $this->input->get('tahun_pendaftaran');

		if ($id_kelas) {
			$query  =   "SELECT * FROM siswa
			JOIN kelas USING(id_kelas)
			WHERE tahun_pendaftaran = '$tahun_pendaftaran' AND
			nis IN (SELECT nis FROM transaksi WHERE 
			id_kelas = $id_kelas AND
			bulan_dibayar = '$bulan_dibayar')";

			$query1  =   "SELECT * FROM siswa 
			JOIN kelas USING(id_kelas)
			WHERE tahun_pendaftaran = '$tahun_pendaftaran' AND
			nis NOT IN (SELECT nis FROM transaksi WHERE 
			id_kelas = $id_kelas AND
			bulan_dibayar = '$bulan_dibayar')";

			$data['laporan_sudah'] = $this->db->query($query)->result_array();
			$data['laporan_belum'] = $this->db->query($query1)->result_array();

			$data['id_kelas'] = $id_kelas;
			$data['tahun_pendaftaran'] = $tahun_pendaftaran;
			$data['bulan_dibayar'] = $bulan_dibayar;

		}

		$this->load->view('template/header');
		$this->load->view('laporan/index', $data);
		$this->load->view('template/footer');
	}

	public function cetak_sudah_bayar($tahun_pendaftaran, $id_kelas, $bulan_dibayar)
	{
		$query  =   "SELECT * FROM siswa 
		JOIN kelas USING(id_kelas)
		WHERE 
		tahun_pendaftaran = '$tahun_pendaftaran' AND
		nis IN (SELECT nis FROM transaksi WHERE 
		id_kelas = $id_kelas AND
		bulan_dibayar = '$bulan_dibayar')";	

		$data['laporan_sudah'] = $this->db->query($query)->result_array();

		$this->load->view('laporan/cetak_sudah_bayar', $data, FALSE);
	}

	public function cetak_belum_bayar($tahun_pendaftaran, $id_kelas, $bulan_dibayar)
	{
		$query  =   "SELECT * FROM siswa 
		JOIN kelas USING(id_kelas)
		WHERE 
		tahun_pendaftaran = '$tahun_pendaftaran' AND
		nis NOT IN (SELECT nis FROM transaksi WHERE 
		id_kelas = $id_kelas AND
		bulan_dibayar = '$bulan_dibayar')";	

		$data['laporan_sudah'] = $this->db->query($query)->result_array();

		$this->load->view('laporan/cetak_belum_bayar', $data, FALSE);
	}

	public function siswa()
	{
							 $this->db->join('siswa', 'nis');
							 $this->db->order_by('tgl_bayar', 'desc');
							 $this->db->where('id_siswa', $this->session->userdata('id_siswa'));
		$data['transaksi'] = $this->db->get('transaksi', 10, 0)->result_array();

		$tahun = $this->input->get('tahun');

		$siswa = $this->db->get_where('siswa',['id_siswa' => $this->session->userdata('id_siswa')])->row_array();

		if ($tahun) {
							$this->db->join('siswa', 'nis');
							$this->db->join('kelas', 'siswa.id_kelas=kelas.id_kelas');
							$this->db->where('nis', $siswa['nis']);
							$this->db->where('tahun_dibayar', $tahun);
			$data['data'] = $this->db->get('transaksi')->result_array();
			$data['tahun'] = $tahun;
		}

		$this->load->view('template/header');
		$this->load->view('laporan/siswa', $data);
		$this->load->view('template/footer');
	}

	public function cetak_laporan_siswa()
	{
		$tahun = $this->input->get('tahun');
		$siswa = $this->db->get_where('siswa',['id_siswa' => $this->session->userdata('id_siswa')])->row_array();

							$this->db->join('siswa', 'nis');
							$this->db->join('kelas', 'siswa.id_kelas=kelas.id_kelas');
							$this->db->where('nis', $siswa['nis']);
							$this->db->where('tahun_dibayar', $tahun);
			$data['data'] = $this->db->get('transaksi')->result_array();
			$data['tahun'] = $tahun;

		$this->load->view('laporan/cetak_laporan_siswa', $data);
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */ ?>