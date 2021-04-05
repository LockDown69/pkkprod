<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {



	// get data akun
	function getUser()
	{
		$this->db->select('*')
				 ->from('tb_login')
				 ->where('status = 2');
		$query = $this->db->get();
		return $query;
	}


	//
	function insertDatauser()
	{
		$username 	= $this->input->post('username');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$email = $this->input->post('email');

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
						'username'	=>$username,
						'nama' =>$nama,
						'foto' =>$gbr['file_name'],
						'password' =>md5($password),
						'Email' =>$email,
						'status' =>2,
						'cek' =>1,
					);
					$this->db->insert('tb_login', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'username'	=>$username,
				'nama' =>$nama,
				'foto' =>assets/img/profile_picture,
				'password' =>sha1($password),
				'Email' =>$email,
				'status' =>2,
				'cek' =>1,
			);
			$this->db->insert('tb_login', $data);
		}
	}

	// update
	function updateDatauser(){

    $id 	= $this->input->post('id');
	$username 	= $this->input->post('username');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');

	$this->load->library('upload');
	$nmfile ="$nama_foto"."_".time();
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
					'username'	=>$username,
					'nama' =>$nama,
					'foto' =>$gbr['file_name'],
					'Email' =>$email,
					'status' =>2,
				    'cek' =>1,
				);
				$this->db->where('id_user', $id)->update('tb_login', $data);
		}
	}
	else{
		$gbr = $this->upload->data();
		$data = array (
			'username'	=>$username,
			'nama' =>$nama,
			'Email' =>$email,
			'status' =>2,
			 'cek' =>1,
		);
		$this->db->where('id_user', $id)->update('tb_login', $data);
	}
}

	function deleteDatauser( $id )
	{
		// query
		$this->db->where('id_user', $id)->delete('tb_login');

	}

	function searchUser()
	{
		$nama 	= $this->input->post('nama');
		
		$this->db->select('*')
				 ->from('tb_login')
				 ->like('nama', $nama);
		$query = $this->db->get();
		return $query;
	}
}
