<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //Halaman Utama Website Home Page
	public function index()
	{
		$data = array ( 'title'  => 'SPK PEGAWAI',
                         'isi'   => 'home/list'               
                          );
        $this->load->view('layout/wrapper', $data, FALSE);
	}
}
