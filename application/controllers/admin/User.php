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
            //  validasi input
            $valid = $this->form_validation;

            $valid->set_rules('nip','Nip','required|is_unique[nip]',
                        array(  'required'      =>  '%s harus diisi',
                                'is_unique'     =>  '%s Sudah ada. Masukkan Nip Baru.'));
            
            $valid->set_rules('nama','Nama lengkap','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('alamat','Alamat Pegawai','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('gender','Jenis Kelamin','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('ttl','Tanggal Lahir','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('tmk','Tmk','required',
                        array('required' => '%s harus diisi'));
            
            $valid->set_rules('status_pegawai','Status Pegawai','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('pendidikan','Pendidikan','required',
                        array('required' => '%s harus diisi'));

            $valid->set_rules('golongan','Golongan','required',
                        array('required' => '%s harus diisi'));

            if($valid->run() == FALSE) {

            // end validation


            $data = array( 'title' => 'Tambah Data Pegawai',
                            'isi'  => 'admin/pegawai/tambah'
                        );
            $this->load->view('admin/layout/wrapper',$data,FALSE);

            //Masuk Database
                    } else {
                    //     $i = $this->input;
                    //     $data = array ( 'nip'               => $i->post('nip'),
                    //                     'nama'              => $i->post('nama'),
                    //                     'alamat'            => $i->post('alamat'),
                    //                     'gender'            => $i->post('gender'),
                    //                     'ttl'               => $i->post('ttl'),
                    //                     'tmk'               => $i->post('tmk'),
                    //                     'status_pegawai'    => $i->post('status_pegawai'),
                    //                     'pendidikan'        => $i->post('pendidikan'),
                    //                     'golongan'          => $i->post('golongan'),
                    //                     'status'            => 1,
                    // );
                    print_r('bisa');
                    // $this->user_model->tambah($data);
                    // $this->session->set_flashdata('sukses','Data telah berhasil ditambah');
                    // redirect(base_url('admin/user'),'refresh');
                }
                    // end masuk database
        }
}
