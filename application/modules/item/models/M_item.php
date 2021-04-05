<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_item extends CI_Model {



	// get data akun
	function getItem()
	{
		$this->db->select('*')
				 ->from('tb_item');
		$query = $this->db->get();
		return $query;
	}


	//
	function insertItem()
	{
		$nama_item 	= $this->input->post('nama_item');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_item"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_item']['name'])
		{
			if ($this->upload->do_upload('gambar_item'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_item'	=>$nama_item,
						'gambar_item' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);
					$this->db->insert('tb_item', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_item'	=>$nama_item,
				'keterangan' =>$keterangan,
			);
			$this->db->insert('tb_item', $data);
		}
	}

	// update
	function updateItem()
	{
		$id 	= $this->input->post('id');
		$nama_item 	= $this->input->post('nama_item');
		$keterangan = $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile ="$nama_item"."_".time();
		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '5120';
		$config['max_width'] = '4300';
		$config['max_height'] = '4300';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['gambar_item']['name'])
		{
			if ($this->upload->do_upload('gambar_item'))
			{
					$gbr = $this->upload->data();
					$data = array (
						'nama_item'	=>$nama_item,
						'gambar_item' =>$gbr['file_name'],
						'keterangan' =>$keterangan,
					);
					$this->db->where('id_item', $id)->update('tb_item', $data);
			}
		}
		else{
			$gbr = $this->upload->data();
			$data = array (
				'nama_item'	=>$nama_item,
				'keterangan' =>$keterangan,
			);
			$this->db->where('id_item', $id)->update('tb_item', $data);
		}
	}



	function deleteItem( $id )
	{
		// query
		$this->db->where('id_item', $id)->delete('tb_item');

	}


}
