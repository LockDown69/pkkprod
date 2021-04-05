<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_setting extends MX_Controller {


	function __construct()
	{
		parent:: __construct();
		// load model
		$this->load->model('M_user_setting');

    // check session login
		if ( empty( $this->session->userdata('id_user') ) )
		{
			$this->session->set_flashdata('msg', 'BelumLogin');
			redirect('login');
		}

	}


	function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data = array(
			'namamodule' 	=> "user_setting",
			'namafileview' 	=> "v_user_setting",

			// variable
			'getPeminjaman'=> $this->M_user_setting->getPeminjaman(),
			'getBarang'=> $this->M_user_setting->getBarang(),
      		'getUser'=> $this->M_user_setting->getUser($id_user),
			'joinPeminjamanUser'=> $this->M_user_setting->joinPeminjamanUser($id_user),
			// 'getCredential'=> $this->M_user_setting->getCredential($varusername, $varPassword),
		);
		echo Modules::run('template/tampilRegister', $data);
	}

	// update
	function editDataUser()
	{
		$id_user = $this->session->userdata('id_user');

		$this->M_user_setting->updateDatauser();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user_setting');
	}

	function editDataPinjamUser()
	{
		$id_user = $this->session->userdata('id_user');

		$this->M_user_setting->updatePinjamUser();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user_setting');
	}

	function simpanPinjamUser()
	{
		$id_user = $this->session->userdata('id_user');
		$this->M_user_setting->insertPinjamUser($id_user);
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('user_setting');
	}

	// Search
	function cariuser()
  {
    // view
    $data = array(
      'namamodule' 	=> "user",
      'namafileview' 	=> "v_user",

      // variable
      'getuser'=> $this->M_user_setting->searchuser(),
    );
    echo Modules::run('template/tampilOutlet', $data);
  }
}
