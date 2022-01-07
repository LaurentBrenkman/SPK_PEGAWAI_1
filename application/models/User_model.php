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
}
