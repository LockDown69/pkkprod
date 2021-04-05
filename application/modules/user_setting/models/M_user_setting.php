<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_setting extends CI_Model {



	// get data akun
	function getUser($id_user)
	{

		$this->db->select('*')
				 ->from('tb_login')
				->where('id_user', $id_user);
		$query = $this->db->get();
		return $query;
	}

	function getPeminjaman()
  {
    $this->db->select('*')
         ->from('tb_peminjaman');
    $query = $this->db->get();
    return $query;
  }

  function getBarang()
  {
    $this->db->select('*')
         ->from('barang');
    $query = $this->db->get();
    return $query;
  }

	function joinPeminjamanUser($id_user)
	{
		$this->db->select('*')
						 ->from('tb_peminjaman')
						 ->join('barang','tb_peminjaman.id_barang = barang.id_barang')
						 ->join('tb_login','tb_peminjaman.id_user = tb_login.id_user')
						 ->where('tb_login.id_user',$id_user);
	$query = $this->db->get();

		return $query;
	}

  function joinPeminjaman()
  {
    $this->db->select('*')
             ->from('tb_peminjaman')
             ->join('barang','tb_peminjaman.id_barang = barang.id_barang');
  $query = $this->db->get();

    return $query;
 }

	// function getCredential($varPassword)
	// {
	// 	$getField = array('password' => $varPassword);
	//
	// 	$query = $this->db->get_where('tb_login', $getField);
	//
	// 	return $query->row();
	// }

	// update
	function updateDatauser()
	{
		$id 	= $this->input->post('id');
		$nama 	= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$email 	= $this->input->post('email');
		$foto = $this->input->post('foto');

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
						'username'	=>$username,
						'email' =>$email,
						'foto' =>$gbr['file_name'],
					);
					$this->db->where('id_user', $id)->update('tb_login', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama'	=>$nama,
				'username'	=>$username,
				'email' =>$email,
			);
			$this->db->where('id_user', $id)->update('tb_login', $data);
		}
		}

		function insertPinjamUser($id_user)
	   {
		 $id_barang = $this->input->post('id_barang');
		 $id_user = $this->input->post('id_user');
	     $catatan = $this->input->post('catatan');

		 $data = array (
			'id_barang' =>$id_barang,
			'id_user' =>$id_user,
			'catatan' =>$catatan,
		 );
		 $this->db->insert('tb_peminjaman', $data);
	   }

	  function updatePinjamUser()
	  {
	    $id 	= $this->input->post('id');
	    $status  = $this->input->post('status');
	    $catatan = $this->input->post('catatan');

	      $data = array (
	         'status'	=>$status,
	         'catatan' =>$catatan,
	      );
	     $this->db->where('id_peminjaman', $id)->update('tb_peminjaman', $data);

	  }

}
