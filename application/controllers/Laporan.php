<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Log_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('level') != 1){
            redirect('login/index');
        }
	} 

	function index(){
		$data['_view'] = 'laporan/index';
        $this->load->view('layouts/main',$data);
	}
	
	function jumlah(){
		$data['_view'] = 'laporan/jumlah';
        $this->load->view('layouts/main',$data);
	}
	
	function activity(){
		$data['log'] = $this->Log_model->get_all_log();
        $data['_view'] = 'laporan/activity';
        $this->load->view('layouts/main',$data);
	}
}
