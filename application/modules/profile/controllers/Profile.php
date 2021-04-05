<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('login/M_master_userid');
		$this->load->model('login/M_session');
		$this->load->model('M_profile');

		// check session login

	}


	function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data = array(
			'namamodule' 	=> "profile",
			'namafileview' 	=> "v_profile",

			// variable
      		'getProfile'=> $this->M_profile->getProfile($id_user),
			// 'getCredential'=> $this->M_user_setting->getCredential($varusername, $varPassword),
		);
		echo Modules::run('template/tampilOutlet', $data);
	}

	// update
	function editDataProfile()
	{

		$this->M_profile->updateDataProfile();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('profile');
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
