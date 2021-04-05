 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {



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
        ->from('tb_login')
        ->where('status = 2');
   $query = $this->db->get();
   return $query;
 }


 function joinPeminjaman()
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
  $catatan = $this->input->post('catatan');

  $data = array (
    'id_barang' =>$id_barang,
    'id_user' =>$id_user,
    'catatan' =>$catatan,
 );
 $this->db->insert('tb_peminjaman', $data);
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

 function searchPeminjaman()
 {
   $id_user 	= $this->input->post('id_user');
   $id_barang 	= $this->input->post('id_barang');

   $this->db->select('*')
          ->from('tb_peminjaman')
          ->join('barang','tb_peminjaman.id_barang = barang.id_barang')
          ->join('tb_login','tb_peminjaman.id_user = tb_login.id_user')
          ->like('tb_peminjaman.id_user', $id_user)
          ->like('tb_peminjaman.id_barang',$id_barang);
  return $this->db->get();
  return $query;
}
 }
