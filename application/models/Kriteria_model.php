<?php

class Kriteria_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //  Listing All User
    public function Listing()
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $this->db->order_by('id_kriteria','asc');
        $query = $this->db->get();
        return $query->result();
    }
    //  detail User
       public function detail($id_kriteria)
       {
           $this->db->select('*');
           $this->db->from('kriteria');
           $this->db->where('id_kriteria', $id_kriteria);
           $this->db->order_by('id_kriteria','asc');
           $query = $this->db->get();
           return $query->row(); //kalau ingin membca  satu data maka pakai row kalau ingin pakai banyak data pakai result
       }
    // Tambah
    public function tambah($data)
    {
        $this->db->insert('kriteria',$data);
    }
    
    // // Edit
    public function edit($data)
    {
        $this->db->where('id_kriteria', $data['id_kriteria']);
        $this->db->update('kriteria', $data);
    }

    // Deletes
    public function delete($data)
    {
        $this->db->where('id_kriteria', $data['id_kriteria']);
        $this->db->delete('kriteria', $data);
    }
    
}
