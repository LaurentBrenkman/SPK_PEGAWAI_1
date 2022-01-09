<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    // Load Model Data Kriteria
	public function __construct()
	{
        parent::__construct();
		$this->load->model('kriteria_model');
        $this->load->model('nilai_model');
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
         $data_id = $this->nilai_model->get_kriteria($data);
		if($data_id){
			$this->nilai_model->del_kriteriaid($data);
		}else{
			$this->nilai_model->del_kriteria($data);
		}
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kriteria'), 'refresh');
     }

     public function del_nilai($id_nilai_kriteria) //fungsi untuk delete berdasarkan primmari key
     {
        $data = array('id_nilai_kriteria' => $id_nilai_kriteria);
		$this->nilai_model->del_nilai($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kriteria/nilai_kriteria'), 'refresh');
     }



// Load Model Nilai Kriteria

    // Nilai user
    public function nilai_kriteria()
    {
        $nilai_kriteria = $this->nilai_model->listing();
        
        $data = array( 'title'               => 'Nilai Kriteria',
                        'nilai_kriteria'     => $nilai_kriteria,
                        'isi'                => 'admin/nilai_kriteria/list'
                    );
        
        $this->load->view('admin/layout/wrapper', $data,FALSE);
    }
    // Tambah Nilai Kriteria
    public function tambah_nilai()
    
    {

       // Validasi inputs
       $data_kriteria = $this->kriteria_model->listing();

       $valid = $this->form_validation;

       $valid->set_rules('id_kriteria','ID Kriteria','required',
                   array(  'required'    => '%s harus diisi'));
       
       $valid->set_rules('keterangan','Keterangan','required',
                   array(  'required'    => '%s harus diisi'));

       $valid->set_rules('nilai','Nilai','required',
                   array(  'required'    => '%s harus diisi'));

           if($valid->run() ==FALSE) {

       // End Validasi
        
        $data = array( 'title'               => 'Tambah Nilai Kriteria',
                        'data_kriteria'     =>   $data_kriteria,
                        'isi'                => 'admin/nilai_kriteria/tambah'
                    );
        
        $this->load->view('admin/layout/wrapper', $data,FALSE);
       //  Masuk Database
        }else{

            $i = $this->input;
            $data = array( 'id_kriteria'   => $i->post('id_kriteria'),
                           'keterangan'    => $i->post('keterangan'),
                           'nilai'         => $i->post('nilai')

        );
                   $this->nilai_model->tambah($data);
                   $this->session->set_flashdata('sukses','Data telah berhasil ditambah');
                   redirect(base_url('admin/kriteria/nilai_kriteria'),'refresh');
        }
        //end database
    }

    public function del_kriteria($id){
		
	}

    public function edit_nilai($id_nilai_kriteria)
    
    {

       // Validasi inputs
       $data_kriteria = $this->kriteria_model->listing();

       $kriteria = $this->nilai_model->detail($id_nilai_kriteria);

       $valid = $this->form_validation;

       $valid->set_rules('id_kriteria','ID Kriteria','required',
                   array(  'required'    => '%s harus diisi'));
       
       $valid->set_rules('keterangan','Keterangan','required',
                   array(  'required'    => '%s harus diisi'));

       $valid->set_rules('nilai','Nilai','required',
                   array(  'required'    => '%s harus diisi'));

           if($valid->run() ==FALSE) {

       // End Validasi
        
        $data = array( 'title'               => 'Edit Nilai Kriteria',
                        'data_kriteria'     =>   $data_kriteria,
                        'kriteria'          =>   $kriteria,
                        'isi'                => 'admin/nilai_kriteria/edit'
                    );
        
        $this->load->view('admin/layout/wrapper', $data,FALSE);
        // print_r($kriteria);
       //  Masuk Database
        }else{

            $i = $this->input;
            $data = array( 'id_nilai_kriteria'   => $id_nilai_kriteria,
                            'id_kriteria'   => $i->post('id_kriteria'),
                           'keterangan'    => $i->post('keterangan'),
                           'nilai'         => $i->post('nilai')

        );
                   $this->nilai_model->edit($data);
                   $this->session->set_flashdata('sukses','Data telah berhasil ditambah');
                   redirect(base_url('admin/kriteria/nilai_kriteria'),'refresh');
        }
        //end database
    }




}
