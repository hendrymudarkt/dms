<?php
class Jenis extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Jenis_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	} 
	
	function data_jenis(){
        $data = $this->Jenis_model->get_all_jenis();
        echo json_encode($data);
    }

    function index(){
        $data['_view'] = 'dokumen/jenis';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
				'nama' => $this->input->post('nama')
            );
            
			$jenis_id = $this->Jenis_model->add_jenis($params);
			echo json_encode($jenis_id);
        }
        else{            
            $data['_view'] = 'jenis/add';
            $this->load->view('layouts/main',$data);
        }
	}

	function edit(){
		$id = $this->input->post('id_jenis');
		$nama = $this->input->post('nama');

		$jenis_id = $this->Jenis_model->update_jenis($id, $nama);
		echo json_encode($jenis_id);
	}
	
	function get_jenis(){
        $id = $this->input->get('id');
        $data = $this->Jenis_model->get_jenis($id);
		echo json_encode($data);
	}

    function remove(){
        $id = $this->input->post('id');
        $data = $this->Jenis_model->delete_jenis($id);
        echo json_encode($data);
    }
}
