<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    // Load Model
	public function __construct()
	{
        parent::__construct();
		$this->load->model('kriteria_model');
	}

    // Data user
    public function index()
    {
        $data_kriteria = $this->kriteria_model->listing();
        
        $data = array( 'title'               => 'Data Kriteria',
                        'data_kriteria'      => $data_kriteria,
                        'isi'                => 'admin/data_kriteria/list'
                    );
        
        $this->load->view('admin/layout/wrapper', $data,FALSE);
    }

     // Tambah Data Kriteria
     public function tambah()
     {

        // Validasi inputs
        $valid = $this->form_validation;

        $valid->set_rules('nama_kriteria','Nama Kriteria','required',
                    array(  'required'    => '%s harus diisi'));
        
        $valid->set_rules('keterangan','Keterangan','required',
                    array(  'required'    => '%s harus diisi'));

            if($valid->run() ==FALSE) {

        // End Validasi
         
         $data = array( 'title'               => 'Tambah Data Kriteria',
                         'isi'                => 'admin/data_kriteria/tambah'
                     );
         
         $this->load->view('admin/layout/wrapper', $data,FALSE);
        //  Masuk Database
         }else{

             $i = $this->input;
             $data = array( 'nama_kriteria' => $i->post('nama_kriteria'),
                            'keterangan'    => $i->post('keterangan')
         );
                    $this->kriteria_model->tambah($data);
                    $this->session->set_flashdata('sukses','Data telah berhasil ditambah');
                    redirect(base_url('admin/kriteria'),'refresh');
         }
         //end database
     }

     // Edit Data Kriteria
     public function edit($id_kriteria)
     {
        $kriteria = $this->kriteria_model->detail($id_kriteria);

        // Validasi inputs
        $valid = $this->form_validation;

        $valid->set_rules('nama_kriteria','Nama Kriteria','required',
                    array(  'required'    => '%s harus diisi'));
        
        $valid->set_rules('keterangan','Keterangan','required',
                    array(  'required'    => '%s harus diisi'));

            if($valid->run() ==FALSE) {

        // End Validasi
         
         $data = array( 'title'               => 'Edit Data Kriteria',
                        'kriteria'            =>  $kriteria,
                         'isi'                => 'admin/data_kriteria/edit'
                     );
         
         $this->load->view('admin/layout/wrapper', $data,FALSE);

        //  Masuk Database
            }else{
             $i = $this->input;
             $data = array (  'id_kriteria'   => $id_kriteria,
                              'nama_kriteria' => $i->post('nama_kriteria'),
                              'keterangan'    => $i->post('keterangan')
                            );
                    $this->kriteria_model->edit($data);
                    $this->session->set_flashdata('sukses','Data telah berhasil ditambah');
                    redirect(base_url('admin/kriteria'),'refresh');
         }
         //end database
     }
     //delete user from
     public function delete($id_kriteria) //fungsi untuk delete berdasarkan primmari key
     {
         $data = array('id_kriteria' => $id_kriteria);
         $this->kriteria_model->delete($data);
         $this->session->set_flashdata('sukses','Data telah berhasil dihapus');
         redirect(base_url('admin/kriteria'),'refresh');
     }
}
