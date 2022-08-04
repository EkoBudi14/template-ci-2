<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function coba()
	{
		$this->load->view('home/dashboard');
	}


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}


	public function indexDua()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}

	public function tambah()
	{
		$this->load->view('v_input');
	}

	public function tambahAksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
		$this->m_data->input_data($data, 'user');
		redirect('crud/index');
	}

	
}
