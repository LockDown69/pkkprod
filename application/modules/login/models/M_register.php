<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {



	// get data akun
	function getLogin()
	{
		$this->db->select('*')
				 ->from('tb_login');
		$query = $this->db->get();
		return $query;
	}

	//
	function insertDataregisterAdmin()
	{
		$username 	= $this->input->post('username');
		$nama 	= $this->input->post('nama');
		$password 	= $this->input->post('password');
		$email 	= $this->input->post('email');
		$status = $this->input->post('status');
		$cek = $this->input->post('cek');

		$data = array (
			'username'	=>$username,
			'nama'	=>$nama,
			'password' =>md5($password),
		    'email' =>$email,
			'foto' =>'profile-photos/1.png',
			'status' =>1,
			'cek' =>1,
		);

		$this->db->insert('tb_login', $data);
	}

	function insertDataregisterUser()
	{
		$username 	= $this->input->post('username');
		$nama 	= $this->input->post('nama');
		$password 	= $this->input->post('password');
		$email 	= $this->input->post('email');
		$status = $this->input->post('status');
		$cek = $this->input->post('cek');

		$data = array (
			'username'	=>$username,
			'nama'	=>$nama,
			'password' =>md5($password),
		    'email' =>$email,
			'foto' =>'profile-photos/1.png',
			'status' =>2,
			'cek' =>1,
		);

		$this->db->insert('tb_login', $data);
	}



	function searchbarang()
	{
		$nama_barang 	= $this->input->post('nama_barang');
		$merk_barang 	= $this->input->post('merk_barang');
		$this->db->select('*')
				 ->from('barang')
				 ->like('nama_barang', $nama_barang)
				 ->like('merk_barang', $merk_barang);;
		$query = $this->db->get();
		return $query;
	}
}
