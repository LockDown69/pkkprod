<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sarana extends CI_Model {



	// get data akun
	function getSarana()
	{
		$this->db->select('*')
				 ->from('tb_sarana');
		$query = $this->db->get();
		return $query;
	}


	//
	function insertDataSarana()
	{
		$nama_sarana 	= $this->input->post('nama_sarana');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_sarana"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_sarana']['name'])
		{
			if ($this->upload->do_upload('gambar_sarana'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_sarana'	=>$nama_sarana,
						'gambar_sarana' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);
					$this->db->insert('tb_sarana', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_sarana'	=>$nama_sarana,
				'gambar_sarana' =>'profile-photos/1.png',
				'keterangan' =>$keterangan,
			);
			$this->db->insert('tb_sarana', $data);
		}
	}

	// update
	function updateDataSarana()
	{
		$id 	= $this->input->post('id');
		$nama_sarana 	= $this->input->post('nama_sarana');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_sarana"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_sarana']['name'])
		{
			if ($this->upload->do_upload('gambar_sarana'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_sarana'	=>$nama_sarana,
						'gambar_sarana' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);
					$this->db->where('id_sarana', $id)->update('tb_sarana', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_sarana'	=>$nama_sarana,
				'keterangan' =>$keterangan,
			);
			$this->db->where('id_sarana', $id)->update('tb_sarana', $data);
		}
	}

	function deleteDataSarana( $id )
	{
		// query
		$this->db->where('id_sarana', $id)->delete('tb_sarana');

	}

	function searchDataSarana()
	{
		$nama_sarana 	= $this->input->post('nama_sarana');
		$this->db->select('*')
				 ->from('tb_sarana')
				 ->like('nama_sarana', $nama_sarana);
		$query = $this->db->get();
		return $query;
	}
}
