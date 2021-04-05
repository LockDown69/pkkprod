<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {



	// get data akun
	function getBarang()
	{
		$this->db->select('*')
				 ->from('barang');
		$query = $this->db->get();
		return $query;
	}


	//
	function insertDataBarang()
	{
		$nama_barang 	= $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_barang"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_barang']['name'])
		{
			if ($this->upload->do_upload('gambar_barang'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_barang'	=>$nama_barang,
						'gambar_barang' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);

					$this->db->insert('barang', $data);

			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_barang'	=>$nama_barang,
				'gambar_barang' =>'profile-photos/1.png',
				'keterangan' =>$keterangan,
			);
			$this->db->insert('barang', $data);
		}
	}

	// update
	function updateDataBarang()
	{
		$id 	= $this->input->post('id');
		$nama_barang 	= $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_barang"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_barang']['name'])
		{
			if ($this->upload->do_upload('gambar_barang'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_barang'	=>$nama_barang,
						'gambar_barang' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);

					$this->db->where('id_barang', $id)->update('barang', $data);

			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_barang'	=>$nama_barang,
				'keterangan' =>$keterangan,
			);
			$this->db->where('id_barang', $id)->update('barang', $data);
		}
		}

	function deleteDataBarang( $id )
	{
		// query
		$this->db->where('id_barang', $id)->delete('barang');

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
