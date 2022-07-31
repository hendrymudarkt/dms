<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Dokumen_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	} 

	function index(){
		$data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
	}
	
	function admin(){
		$data['_view'] = 'dashboard2';
        $this->load->view('layouts/main2',$data);
	}
	
	function pengguna(){
		$data['dokumen'] = $this->Dokumen_model->get_all_dokumen();

		$data['_view'] = 'dashboard3';
        $this->load->view('layouts/main3',$data);
	}
}
