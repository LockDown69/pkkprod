 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_item');

    // check session login


	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "item",
			'namafileview' 	=> "v_item",

			// variable
			'getItem'=> $this->M_item->getItem(),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

	// simpan
	function simpanItem()
	{
		$this->M_item->insertItem();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('item');
	}

	// update
	function editItem()
	{
		$this->M_item->updateItem();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('item');
	}

	// delete
	function hapusItem( $id )
	{
		$this->M_item->deleteItem( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('item');

	}

	// Search
	function cariItem()
  {
    // view
    $data = array(
      'namamodule' 	=> "item",
      'namafileview' 	=> "v_item",

      // variable
      'getItem'=> $this->M_item->searchItem(),
    );
    echo Modules::run('template/tampilOutlet', $data);
  }
}
