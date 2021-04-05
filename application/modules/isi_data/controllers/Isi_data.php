 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isi_data extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		//get model
				$this->load->model('M_isi_data');


	}

	function admin(){

			$this->load->view('V_isi_admin');
	}

	function simpantIsidataAdmin()
	{
		$this->M_isi_data->insertIsidataAdmin();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('login');
	}
}
