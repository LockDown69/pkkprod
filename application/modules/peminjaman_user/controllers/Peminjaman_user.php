 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_user extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_peminjaman_user');
	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "peminjaman_user",
			'namafileview' 	=> "v_peminjaman_user",

			// variable
      'getPeminjaman'=> $this->M_peminjaman->getPeminjaman(),
			'getBarang'=> $this->M_peminjaman->getBarang(),
      'getUser'=> $this->M_peminjaman->getUser(),
			'joinPeminjamanUser'=> $this->M_peminjaman->joinPeminjamanUser(),
		);
		echo Modules::run('template/tampilPeminjaman', $data);
	}

  //tambah devisit
	function simpanPinjam()
	{
		$this->M_peminjaman_user->insertPinjam();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman');
	}

	//edit devisit
	function editPinjam()
	{
		$this->M_peminjaman_user->updatePinjam();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman_user');
	}


	// hapus devisit
	function hapusPinjam( $id )
	{
		$this->M_peminjaman_user->deletePinjam( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('peminjaman');

	}

	// Search
	function cariPinjam(  )
	{
    {
      // view
      $data = array(
        'namamodule' 	=> "peminjaman",
        'namafileview' 	=> "v_peminjaman",

        // variable
        'joinPeminjaman'=> $this->M_peminjaman_user->searchPinjam(),
      );
      echo Modules::run('template/tampilOutlet', $data);
    }
  }
}
