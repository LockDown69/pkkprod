<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('M_user');

    // // check session login
	// 	if ( empty( $this->session->userdata('session_id') ) )
	// 	{
	// 		$this->session->set_flashdata('msg', 'BelumLogin');
	// 		redirect('login');
	// 	}

	}


	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "user",
			'namafileview' 	=> "v_user",

			// variable
			'getUser'=> $this->M_user->getUser(),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

	// simpan
	function simpanDatauser()
	{
		$this->M_user->insertDatauser();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user');
	}

	// update
	function editDataUser()
	{
		$this->M_user->updateDatauser();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user');
	}

	// delete
	function hapusDatauser( $id )
	{
		$this->M_user->deleteDatauser( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user');

	}

	// Search
	function cariUser()
  {
    // view
    $data = array(
      'namamodule' 	=> "user",
      'namafileview' 	=> "v_user",

      // variable
      'getuser'=> $this->M_user->searchUser(),
    );
    echo Modules::run('template/tampilOutlet', $data);
  }
}
