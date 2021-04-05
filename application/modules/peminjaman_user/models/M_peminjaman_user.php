 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman_user extends CI_Model {



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

 function getUser()
 {
   $this->db->select('*')
        ->from('tb_login');
   $query = $this->db->get();
   return $query;
 }


 function joinPeminjamanUser()
 {
   $this->db->select('*')
            ->from('tb_peminjaman')
            ->join('barang','tb_peminjaman.id_barang = barang.id_barang')
            ->join('tb_login','tb_peminjaman.id_user = tb_login.id_user');
 $query = $this->db->get();

   return $query;
 }



 function insertPinjam()
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



 //hapus list devisit
 function deletePinjam( $id )
 {
   // query
   $this->db->where('id_peminjaman', $id)->delete('tb_peminjaman');

 }

 function searchPinjam()
 {
   $nama_barang 	= $this->input->post('nama_barang');
   $id_user 	= $this->input->post('id_user');
   $this->db->select('*')
        ->from('tb_peminjaman')
        ->join('barang','tb_peminjaman.id_barang = barang.id_barang')
        ->like('nama_barang', $nama_barang)
        ->like('id_user', $id_user);
   $query = $this->db->get();
   return $query;
 }
 }
