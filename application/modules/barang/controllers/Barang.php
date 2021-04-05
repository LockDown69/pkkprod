<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_barang');

    // check session login
		// if ( empty( $this->session->userdata('session_id') ) )
		// {
		// 	$this->session->set_flashdata('msg', 'BelumLogin');
		// 	redirect('login');
		// }

	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "barang",
			'namafileview' 	=> "v_barang",

			// variable
			'getBarang'=> $this->M_barang->getBarang(),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

	// simpan
	function simpanDataBarang()
	{
		$this->M_barang->insertDataBarang();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('barang');
	}

	// update
	function editDataBarang()
	{
		$this->M_barang->updateDataBarang();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('barang');
	}

	// delete
	function hapusDataBarang( $id )
	{
		$this->M_barang->deleteDataBarang( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('barang');

	}

	// Search
	function caribarang()
  {
    // view
    $data = array(
      'namamodule' 	=> "barang",
      'namafileview' 	=> "v_barang",

      // variable
      'getBarang'=> $this->M_barang->searchbarang(),
    );
    echo Modules::run('template/tampilOutlet', $data);
  }
}
