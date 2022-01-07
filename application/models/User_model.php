<?php

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //  Listing All User
    public function Listing()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->order_by('nip','desc');
        $query = $this->db->get();
        return $query->result();
    }
    //  detail User
       public function detail($nip)
       {
           $this->db->select('*');
           $this->db->from('pegawai');
           $this->db->where('nip', $nip);
           $this->db->order_by('nip','desc');
           $query = $this->db->get();
           return $query->row(); //kalau ingin membca  satu data maka pakai row kalau ingin pakai banyak data pakai result
       }
    // Tambah
    public function tambah($data)
    {
        $this->db->insert('pegawai',$data);
    }
    
    // Edit
    public function edit($data)
    {
        $this->db->where('nip', $data['nip']);
        $this->db->update('pegawai', $data);
    }
    // Deletes
    public function delete($data)
    {
        $this->db->where('nip', $data['nip']);
        $this->db->delete('pegawai', $data);
    }
    
}
