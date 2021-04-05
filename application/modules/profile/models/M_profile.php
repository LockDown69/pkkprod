<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {



	// get data akun
	function getProfile($id_user)
	{

		$this->db->select('*')
				 ->from('tb_login')
				->where('id_user', $id_user);
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
	function updateDataProfile()
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

		function insertPinjamUser()
	   {
	     $id_barang = $this->input->post('id_barang');
	     $id_user = $this->input->post('id_user');
	     $jumlah_pinjam = $this->input->post('jumlah_pinjam');
	     $jam = $this->input->post('jam');
	     $status = $this->input->post('status');
	     $catatan = $this->input->post('catatan');

	     $this->load->library('upload');
	     $nmfile ="$id_user"."_".time();
	     $config['upload_path'] = 'assets/img/';
	     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	     $config['max_size'] = '5120';
	     $config['max_width'] = '4300';
	     $config['max_height'] = '4300';
	     $config['file_name'] = $nmfile;

	     $this->upload->initialize($config);

	     if($_FILES['gambar_kpelajar']['name'])
	     {
	       if ($this->upload->do_upload('gambar_kpelajar'))
	       {
	           $gbr = $this->upload->data();
	           $data = array (
	              'id_barang' =>$id_barang,
	              'id_user' =>$id_user,
	              'jumlah_pinjam' => $jumlah_pinjam,
	              'jam'	=>$jam,
	              'status'	=>$status,
	              'catatan' =>$catatan,
	              'gambar_kpelajar' =>$gbr['file_name'],
	           );
	           $this->db->insert('tb_peminjaman', $data);
	       }
	     }
	     else{
	       $gbr = $this->upload->data();
	       $data = array (
	          'id_barang' =>$id_barang,
	          'id_user' =>$id_user,
	          'jumlah_pinjam' => $jumlah_pinjam,
	          'jam'	=>$jam,
	          'status'	=>$status,
	          'catatan' =>$catatan,
	          'gambar_kpelajar' =>'profile-photos/1.png',
	       );
	       $this->db->insert('tb_peminjaman', $data);
	     }
	   }

	  function updatePinjam()
	  {
	    $id 	= $this->input->post('id');
	    $status  = $this->input->post('status');
	    $catatan = $this->input->post('catatan');

	    // echo $status;
	    // die;
	      $data = array (
	         'status'	=>$status,
	         'catatan' =>$catatan,
	      );
	     $this->db->where('id_peminjaman', $id)->update('tb_peminjaman', $data);

	  }

}
