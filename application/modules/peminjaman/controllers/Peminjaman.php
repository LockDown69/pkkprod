 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_peminjaman');
	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "peminjaman",
			'namafileview' 	=> "v_peminjaman",

			// variable
			'getPeminjaman'=> $this->M_peminjaman->getPeminjaman(),
			'getBarang'=> $this->M_peminjaman->getBarang(),
            'getUser'=> $this->M_peminjaman->getUser(),
			'joinPeminjaman'=> $this->M_peminjaman->joinPeminjaman(),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

  //tambah devisit
	function simpanPinjam()
	{
		$this->M_peminjaman->insertPinjam();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman');
	}

	//edit devisit
	function editPinjam()
	{
		$this->M_peminjaman->updatePinjam();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman');
	}


	// hapus devisit
	function hapusPinjam( $id )
	{
		$this->M_peminjaman->deletePinjam( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman');

	}

	// Search
	function cariPeminjaman(  )
	{
    {
      // view
      $data = array(
        'namamodule' 	=> "peminjaman",
        'namafileview' 	=> "v_peminjaman",

		// variable
		'getPeminjaman'=> $this->M_peminjaman->getPeminjaman(),
		'getBarang'=> $this->M_peminjaman->getBarang(),
        'getUser'=> $this->M_peminjaman->getUser(),
        'joinPeminjaman'=> $this->M_peminjaman->searchPeminjaman(),
      );
      echo Modules::run('template/tampilOutlet', $data);
    }
  }
}
