<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login

{
    protected $CI;

    public function __construct()
    {
        $this->CI = & get_instance();
        // Load data model user
        $this->CI->load->model('user_model');
    }


    //Fungsi Login 
    public function login($username,$password)
    {
        $check = $this->CI->user_model->login($username,$password);
        // jika ada data usernya maka create session login
        if($check) {
            $id_user = $check->id_user;
            $nama    = $check->nama;
            $nip    = $check->nip;
            // create session
            $this->CI->session->set_userdata('id_user',$id_user);
            $this->CI->session->set_userdata('nip',$nip);
            $this->CI->session->set_userdata('username',$username);
            // redirect ke halaman admin yang di proteksi
            $this->CI->session->set_flashdata('success','Login Success');
            redirect(base_url('admin/dasbor'),'refresh');
        }else{
            // kalau tidak ada, maka suruh login kembali
            $this->CI->session->set_flashdata('warning','Username atau pasword salah');
            redirect(base_url('login'),'refresh');
        }
    }

    // Fungsi Cek Logins
    public function cek_login()
    {
        // memeriksa apakah session sudah ada atau belum, jika belom maka alihkan ke halaman login
        if ($this->CI->session->userdata('username') == "") {
             $this->CI->session->set_flashdata('warning','Anda Belom Login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Fungsi Log out
    public Function logout()
    {
        //  Membuang semua session yang telah diset pada waktu login 
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('nip');
        $this->CI->session->unset_userdata('username');
        // setelah sesion di unset maka direct ke login
        $this->CI->session->set_flashdata('sukses','Anda Berhasil Logout');
        redirect(base_url('login'),'refresh');
    }
}

	