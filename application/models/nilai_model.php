<?php

class Nilai_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //  Listing All User
    public function Listing()
    {
        // menampilkan gabungan dari tabel kriteria dan nilai kriteria
        $this->db->select('nilai_kriteria.*, kriteria.nama_kriteria');
        $this->db->from('nilai_kriteria');
        // join untuk menghubungkan 2 tabel yaitu nilai kriteria dan kriteria yang berdasarkan id kriteria
        $this->db->join('kriteria','kriteria.id_kriteria = nilai_kriteria.id_kriteria','left');
        $this->db->order_by('id_nilai_kriteria','asc');
        $query = $this->db->get();
        return $query->result();
    }

    // //  detail User
    public function detail($id_nilai_kriteria)
    {
        $this->db->select('*');
        $this->db->from('nilai_kriteria');
        $this->db->where('id_nilai_kriteria', $id_nilai_kriteria);
        $this->db->order_by('id_nilai_kriteria','asc');
        $query = $this->db->get();
        return $query->row(); //kalau ingin membca  satu data maka pakai row kalau ingin pakai banyak data pakai result
    }
    
 // Tambah
 public function tambah($data)
 {
     $this->db->insert('nilai_kriteria',$data);
 }
 
//  // // Edit
 public function edit($data)
 {
     $this->db->where('id_nilai_kriteria', $data['id_nilai_kriteria']);
     $this->db->update('nilai_kriteria', $data);
 }

//  // Deletes
 public function del_kriteriaid($data)
 {
     $this->db->delete('nilai_kriteria', $data);
     $this->db->delete('kriteria', $data);
 }
 public function del_kriteria($data)
 {
     $this->db->delete('kriteria', $data);
 }
 public function del_nilai($data)
 {
     $this->db->delete('nilai_kriteria', $data);
 }
 //  Listing All User
 public function get_kriteria()
 {
     // menampilkan gabungan dari tabel kriteria dan nilai kriteria
     $this->db->select('*');
     $this->db->from('nilai_kriteria');
     // join untuk menghubungkan 2 tabel yaitu nilai kriteria dan kriteria yang berdasarkan id kriteria
     $this->db->order_by('id_nilai_kriteria','asc');
     $query = $this->db->get();
     return $query->result();
 }

}
?>