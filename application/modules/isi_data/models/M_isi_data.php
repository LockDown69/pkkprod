<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_isi_data extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function store_session($getId){

		$this->session->set_userdata('session_id', $getId);
	}

	function store_id($id){

		$this->session->set_userdata('grup_id', $id);
	}


	function insertIsidataAdmin()
  {
	$id =$this->input->post('id')
	$nama 	= $this->input->post('nama');
	$no_tlp 	= $this->input->post('no_tlp');
	$email 	= $this->input->post('email');
	$gender 	= $this->input->post('gender');
	$alamat = $this->input->post('alamat');

	$this->load->library('upload');
	$nmfile ="$nama"."_".time();
	$config['upload_path'] = 'assets/img/';
	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	$config['max_size'] = '5120';
	$config['max_width'] = '4300';
	$config['max_height'] = '4300';
	$config['file_name'] = $nmfile;

	$this->upload->initialize($config);

	if($_FILES['foto']['name'])
	{
		if ($this->upload->do_upload('foto'))
		{
				$gbr = $this->upload->data();
				$data = array (
					'nama'	=>$nama,
					'no_tlp'	=>$no_tlp,
					'email' =>$email,
					'foto' =>$gbr['file_name'],
					'gender' =>$gender,
					'alamat' =>$alamat,
				);

				$this->db->where('id_user', $id)->update('tb_login', $data);

		}
	}
	else{
		$gbr = $this->upload->data();
		$data = array (
			'nama'	=>$nama,
			'no_tlp'	=>$no_tlp,
			'email' =>$email,
			'foto' =>'profile-photos/1.png',
			'gender' =>$gender,
			'alamat' =>$alamat,
		);
		$this->db->where('id_user', $id)->update('tb_login', $data);
	}
	}

	function simpanRegisterUser()
	{
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');
		 $status = $this->input->post('status');
		 $cek = $this->input->post('cek');

		$data = array (
			 'username' =>$username,
			 'password' =>md5($password),
			 'status' =>'2',
			 'cek' =>'0',
		);
		// query
		$this->db->insert('tb_login', $data);
	}



	function destroy_session(){

	}
}
?>
