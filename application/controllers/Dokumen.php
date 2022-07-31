<?php
class Dokumen extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('Dokumen_model');
		$this->load->helper('download');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}
	
	function data_dokumen(){
        $data = $this->Dokumen_model->get_all_dokumen();
        echo json_encode($data);
    }

    function demo(){
		if($this->session->userdata('level') == 1){
			$data['demo'] = $this->Demo_model->get_all_demo();
			$data['_view'] = 'dokumen/demo';
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
			$data['demo'] = $this->Demo_model->get_all_demo();
			$data['_view'] = 'dokumen/demo';
        	$this->load->view('layouts/main2',$data);
        }
		else {
			$nik = $this->session->userdata('nik');
			$data['demo'] = $this->Demo_model->get_demo_nik($nik);
			$data['_view'] = 'dokumen/demo';
        	$this->load->view('layouts/main3',$data);
        }
	}

	function view_demo($id){
        $data['demo'] = $this->Demo_model->get_demo($id);
        
        if(isset($data['demo']['id'])){
			if($this->session->userdata('level') == 1){
				$data['_view'] = 'dokumen/demo_view';
            	$this->load->view('layouts/main',$data);
			}
			else if($this->session->userdata('level') == 2) {
				$data['_view'] = 'dokumen/demo_view';
            	$this->load->view('layouts/main2',$data);
			}
			else {
				$data['_view'] = 'dokumen/demo_view';
            	$this->load->view('layouts/main3',$data);
			}
        }
    }
	
	function confirm($id){
        $data['demo'] = $this->Demo_model->get_demo($id);
        
        if(isset($data['demo']['id'])){
            $params = array('status' => 'Disetujui');

            $this->Demo_model->update_demo($id,$params);            
            redirect('dokumen/demo');
        }
    }
	
	function unconfirm($id){
        $data['demo'] = $this->Demo_model->get_demo($id);
        
        if(isset($data['demo']['id'])){
            $params = array('status' => 'Tidak Disetujui');

            $this->Demo_model->update_demo($id,$params);            
            redirect('dokumen/demo');
        }
    }

	function tambah_demo(){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'id' => $this->input->post('id'),
                'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'jabatan' => $this->input->post('jabatan'),
                'alasan' => $this->input->post('alasan'),
                'created_at' => date('Y-m-d H:i:s'),
                'status' => 'pending'
            );
            
            $demo_id = $this->Demo_model->add_demo($params);
            redirect('dokumen/demo');
        }
        else{            
            $data['_view'] = 'dokumen/demo_add';
            if($this->session->userdata('level') == 1){
				$this->load->view('layouts/main',$data);
			}
			else if($this->session->userdata('level') == 2) {
				$this->load->view('layouts/main2',$data);
			}
			else {
				$this->load->view('layouts/main3',$data);
			}
        }
	}
	
	function index(){
		$x['kode'] = $this->Dokumen_model->get_kode();
		$data['_view'] = 'dokumen/index';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main', $data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2', $data);
        }
		else {
        	$this->load->view('layouts/main3', $data);
        }
    }
	
	function dm(){
		$data['_view'] = 'dokumen/dm';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
    }
	
	function dk3(){
		$data['_view'] = 'dokumen/dk3';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function dl(){
		$data['_view'] = 'dokumen/dl';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
    }
	
	function dlab(){
		$data['_view'] = 'dokumen/dlab';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
    }
	
	function smp(){
		$data['_view'] = 'dokumen/smp';
		if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
    }
	
	function km(){
        $data['_view'] = 'dokumen/km';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function km_k3(){
        $data['_view'] = 'dokumen/dk3/km';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	function km_dl(){
		$data['_view'] = 'dokumen/dl/km';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function km_dlab(){
        $data['_view'] = 'dokumen/dlab/km';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function km_smp(){
        $data['_view'] = 'dokumen/smp/km';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_km(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Manual dan Kebijakan";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_km_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Manual dan Kebijakan";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_km_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Manual dan Kebijakan";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_km_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Manual dan Kebijakan";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function pr(){
        $data['_view'] = 'dokumen/pr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function pr_k3(){
        $data['_view'] = 'dokumen/dk3/pr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function pr_dl(){
        $data['_view'] = 'dokumen/dl/pr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function pr_dlab(){
        $data['_view'] = 'dokumen/dlab/pr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function pr_smp(){
        $data['_view'] = 'dokumen/smp/pr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_pr(){
		$kategori = "Dokumen Mutu";
		$jenis = "Prosedur";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_pr_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Prosedur";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_pr_dl(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Prosedur";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_pr_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Prosedur";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_pr_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Prosedur";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function ik(){
        $data['_view'] = 'dokumen/ik';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function ik_k3(){
        $data['_view'] = 'dokumen/dk3/ik';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function ik_dl(){
        $data['_view'] = 'dokumen/dl/ik';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function ik_dlab(){
        $data['_view'] = 'dokumen/dlab/ik';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function ik_smp(){
        $data['_view'] = 'dokumen/smp/ik';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_ik(){
		$kategori = "Dokumen Mutu";
		$jenis = "Instruksi Kerja";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ik_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Instruksi Kerja";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ik_dl(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Instruksi Kerja";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ik_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Instruksi Kerja";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_ik_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Instruksi Kerja";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function fr(){
        $data['_view'] = 'dokumen/fr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function fr_k3(){
        $data['_view'] = 'dokumen/dk3/fr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function fr_dl(){
        $data['_view'] = 'dokumen/dl/fr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function fr_dlab(){
        $data['_view'] = 'dokumen/dlab/fr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function fr_smp(){
        $data['_view'] = 'dokumen/smp/fr';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	
	function data_fr(){
		$kategori = "Dokumen Mutu";
		$jenis = "Formulir";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_fr_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Formulir";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_fr_dl(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Formulir";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_fr_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Formulir";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_fr_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Formulir";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function ed(){
        $data['_view'] = 'dokumen/ed';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function ed_k3(){
        $data['_view'] = 'dokumen/dk3/ed';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function ed_dl(){
        $data['_view'] = 'dokumen/dl/ed';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function ed_dlab(){
        $data['_view'] = 'dokumen/dlab/ed';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function ed_smp(){
        $data['_view'] = 'dokumen/smp/ed';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_ed(){
		$kategori = "Dokumen Mutu";
		$jenis = "Dokumen Eksternal";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ed_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Dokumen Eksternal";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ed_dl(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Dokumen Eksternal";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_ed_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Dokumen Eksternal";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_ed_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Dokumen Eksternal";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function rg(){
        $data['_view'] = 'dokumen/rg';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function rg_k3(){
        $data['_view'] = 'dokumen/dk3/rg';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function rg_dl(){
        $data['_view'] = 'dokumen/dl/rg';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}

	function rg_dlab(){
        $data['_view'] = 'dokumen/dlab/rg';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function rg_smp(){
        $data['_view'] = 'dokumen/smp/rg';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_rg(){
		$kategori = "Dokumen Mutu";
		$jenis = "Regulasi";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_rg_k3(){
		$kategori = "Dokumen SMK3";
		$jenis = "Regulasi";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_rg_dl(){
		$kategori = "Dokumen Integrasi";
		$jenis = "Regulasi";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_rg_dlab(){
		$kategori = "Dokumen Laboratorium";
		$jenis = "Regulasi";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_rg_smp(){
		$kategori = "Dokumen SMP";
		$jenis = "Regulasi";
		$dokumen = $this->Dokumen_model->get_kategori($jenis, $kategori);
		echo json_encode($dokumen);
	}

	function fc(){
        $data['_view'] = 'dokumen/fc';
        if($this->session->userdata('level') == 1){
        	$this->load->view('layouts/main',$data);
        }
		else if($this->session->userdata('level') == 2) {
        	$this->load->view('layouts/main2',$data);
        }
		else {
        	$this->load->view('layouts/main3',$data);
        }
	}
	
	function data_fc(){
		$kategori = "Flowchart";
		$jenis = $this->Dokumen_model->get_kategori($kategori);
		echo json_encode($jenis);
	}

    function add(){
        if(isset($_POST) && count($_POST) > 0){
			$config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'jpeg|jpg|png|pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
            $config['overwrite']            = 'TRUE';
     
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('files')){
				$file = $this->upload->data();
				$lampiran = $file['file_name'];
				
				$params = array(
					'judul' => $this->input->post('judul'),
					'file' => $lampiran,
					'tanggal' => $this->input->post('tanggal'),
					'jenis_dokumen' => $this->input->post('jenis_dokumen'),
					'kategori' => $this->input->post('kategori'),
					'owner' => $this->session->userdata('nama')
				);
				
				$dokumen_id = $this->Dokumen_model->add_dokumen($params);
				helper_log("add", $this->session->userdata('nama')." menambahkan dokumen ".$this->input->post('judul'));
				echo json_encode($dokumen_id);
            }
            else{
				$error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
			}
        }
        else{            
            $data['_view'] = 'dokumen/add';
            $this->load->view('layouts/main',$data);
        }
	}

	function edit(){
		$config['upload_path']          = 'lampiran/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 3000;
		$config['max_height']           = 1688;
		$config['overwrite']            = 'TRUE';
     
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('lampiran')){
			
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$tanggal = $this->input->post('tanggal');
			$jenis_dokumen = $this->input->post('jenis_dokumen');
			$owner = $this->session->userdata('nama');

			$dokumen_id = $this->Dokumen_model->update_dokumen2($id, $judul, $tanggal, $jenis_dokumen, $owner);
			helper_log("edit", $this->session->userdata('nama')." merubah dokumen ".$judul);
			echo json_encode($dokumen_id);
        }
        else{
			$file = $this->upload->data();
			$lampiran = $file['file_name'];
			
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$file = $file;
			$tanggal = $this->input->post('tanggal');
			$jenis_dokumen = $this->input->post('jenis_dokumen');
			$id_user = $this->session->userdata('nama');

			$dokumen_id = $this->Dokumen_model->update_dokumen($id, $judul, $file, $tanggal, $jenis_dokumen, $id_user);
			helper_log("edit", $this->session->userdata('nama')." merubah dokumen ".$judul);
			echo json_encode($dokumen_id);
		}
	}
	
	function get_dokumen(){
        $id = $this->input->get('id_dokumen');
        $data = $this->Dokumen_model->get_dokumen($id);
		echo json_encode($data);
	}

    function remove(){
		$id = $this->input->post('id_dokumen');
		$dokumen = $this->Dokumen_model->get_dokumen($id);

        if(isset($dokumen['id_dokumen'])){
            $path = './lampiran/';
            unlink($path.$dokumen['file']);

			$data = $this->Dokumen_model->delete_dokumen($id);
            helper_log("remove", $this->session->userdata('nama')." menghapus dokumen ".$dokumen['judul']);
        	echo json_encode($data);
		}
	}
	
	function view($id){
		$name = $id;
		$file = file_get_contents('./lampiran/'.$id);
		$this->output
           ->set_content_type('application/pdf')
		   ->set_output($file);
		helper_log("view", $this->session->userdata('nama')." mengunduh dokumen ".$name);
    }
}
