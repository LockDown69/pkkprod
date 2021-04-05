 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_sarana');

    // check session login


	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "sarana",
			'namafileview' 	=> "v_sarana",

			// variable
			'getSarana'=> $this->M_sarana->getSarana(),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

	// simpan
	function simpanDataSarana()
	{
		$this->M_sarana->insertDataSarana();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('sarana');
	}

	// update
	function editDataSarana()
	{
		$this->M_sarana->updateDataSarana();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('sarana');
	}

	// delete
	function hapusDataSarana( $id )
	{
		$this->M_sarana->deleteDataSarana( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('sarana');

	}

	// Search
	function cariDataSarana()
  {
    // view
    $data = array(
      'namamodule' 	=> "sarana",
      'namafileview' 	=> "v_sarana",

      // variable
      'getSarana'=> $this->M_sarana->searchDataSarana(),
    );
    echo Modules::run('template/tampilOutlet', $data);
  }
}
