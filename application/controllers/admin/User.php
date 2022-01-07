<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    //Load Models
	public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
	}

    // data user
    public function index()
    {
        $pegawai = $this->user_model->listing();
        
        $data = array( 'title' => 'Data Pegawai',
                        'pegawai' => $pegawai,
                        'isi'  => 'admin/pegawai/list'
                    );
        $this->load->view('admin/layout/wrapper',$data,FALSE);
    }

        // Tambah User
        public function tambah()
        {

            $data = array( 'title' => 'Tambah Data Pegawai',
                            'isi'  => 'admin/pegawai/tambah'
                        );
            $this->load->view('admin/layout/wrapper',$data,FALSE);
        }
}
