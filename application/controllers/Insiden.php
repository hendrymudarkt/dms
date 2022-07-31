<?php
class Insiden extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('Insiden_model');
		$this->load->helper('download');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    }
    
    function data_insiden(){
        $data = $this->Insiden_model->get_all_insiden();
        echo json_encode($data);
    }
	
	function index(){
		$data['_view'] = 'insiden/index';
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

    function add(){
        if(isset($_POST) && count($_POST) > 0){
			$config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'jpeg|jpg|png|pdf';
            $config['max_size']             = 10000;
            $config['overwrite']            = 'TRUE';
     
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('files')){
				$file = $this->upload->data();
				$lampiran = $file['file_name'];
				
				$params = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'area' => $this->input->post('area'),
                    'insiden' => $this->input->post('insiden'),
                    'file' => $lampiran,
                    'penjelasan' => $this->input->post('penjelasan'),
                    'tipe' => $this->input->post('tipe'),
                    'dibuat' => $this->input->post('dibuat'),
                    'bagian' => $this->input->post('bagian'),
					'ditujukan' => $this->input->post('ditujukan'),
					'status' => 'Progress'
				);
				
				$insiden_id = $this->Insiden_model->add_insiden($params);
				helper_log("add", $this->session->userdata('nama')." menambahkan insiden");
                echo json_encode($insiden_id);
                redirect('insiden');
            }
            else{
				$error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
			}
        }
        else{            
            $data['_view'] = 'insiden/add';
            $this->load->view('layouts/main',$data);
        }
	}

	function edit(){
		$config['upload_path']          = 'lampiran/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 10000;
		$config['overwrite']            = 'TRUE';
     
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('lampiran')){
			
			$id = $this->input->post('id');
			$tanggal = $this->input->post('tanggal');
            $area = $this->input->post('area');
            $insiden = $this->input->post('insiden');
            $penjelasan = $this->input->post('penjelasan');
            $tipe = $this->input->post('tipe');
            $dibuat = $this->input->post('dibuat');
            $bagian = $this->input->post('bagian');
			$ditujukan = $this->input->post('ditujukan');

			$insiden_id = $this->Insiden_model->update_insiden($id, $tanggal, $area, $insiden, $penjelasan, $tipe, $dibuat, $bagian, $ditujukan);
			helper_log("edit", $this->session->userdata('nama')." merubah insiden");
            echo json_encode($insiden_id);
            redirect('insiden');
        }
        else{
			$file = $this->upload->data();
			$lampiran = $file['file_name'];
			
			$id = $this->input->post('id');
			$tanggal = $this->input->post('tanggal');
            $area = $this->input->post('area');
            $insiden = $this->input->post('insiden');
            $file = $file;
            $penjelasan = $this->input->post('penjelasan');
            $tipe = $this->input->post('tipe');
            $dibuat = $this->input->post('dibuat');
            $bagian = $this->input->post('bagian');
			$ditujukan = $this->input->post('ditujukan');

			$insiden_id = $this->Insiden_model->update_insiden($id, $tanggal, $area, $insiden, $penjelasan, $tipe, $dibuat, $bagian, $ditujukan);
			helper_log("edit", $this->session->userdata('nama')." merubah insiden");
            echo json_encode($insiden_id);
            redirect('insiden');
		}
	}
	
	function get_insiden(){
        $id = $this->input->get('id');
        $data = $this->Insiden_model->get_insiden($id);
		echo json_encode($data);
	}

    function remove(){
		$id = $this->input->post('id');
		$insiden = $this->Insiden_model->get_insiden($id);
		$insiden2 = $this->Insiden_model->get_stat_insiden($id);

        if(isset($insiden['id'])){
            $path = './lampiran/';
            unlink($path.$insiden['file']);
            unlink($path.$insiden2['file']);

			$data = $this->Insiden_model->delete_insiden($id);
			$data2 = $this->Insiden_model->delete_stat_insiden($id);
            helper_log("remove", $this->session->userdata('nama')." menghapus insiden");
        	echo json_encode($data);
		}
	}
	
	function view($id){
		$name = $id;
		$file = file_get_contents('./lampiran/'.$id);
		$this->output
           ->set_content_type('application/pdf')
		   ->set_output($file);
		helper_log("view", $this->session->userdata('nama')." mengunduh insiden ".$name);
    }

    function confirm($id){
        $data['insiden'] = $this->Insiden_model->get_insiden($id);

        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
            $config['max_size']             = 10000;
            $config['overwrite']            = 'TRUE';
        
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('files')){
                echo "<script>alert('Silahkan upload file/photo terlebih dahulu'); window.location=''</script>";
            }else {
                $file = $this->upload->data();
                $lampiran = $file['file_name'];

                $params = array(
                    'akar_masalah' => $this->input->post('akar_masalah'),
                    'koreksi' => $this->input->post('koreksi'),
                    'perbaikan' => $this->input->post('perbaikan'),
                    'tanggal' => $this->input->post('tanggal'),
                    'file' => $lampiran,
                    'id_insiden' => $this->input->post('id_insiden')
                );
                
                $params2 = array(
                    'status' => 'Selesai'
                );

                $insiden_id = $this->Insiden_model->add_stat_insiden($params);
                $insiden_id2 = $this->Insiden_model->update_insiden($id, $params2);
                helper_log("edit", $this->session->userdata('nama')." konfirmasi status insiden");
                echo json_encode($insiden_id);
                redirect('insiden');
            }
        }else{
            $data['_view'] = 'insiden/confirm';
            $this->load->view('layouts/main',$data);
        }
    }

    function detail($id){
        $data['insiden'] = $this->Insiden_model->get_insiden($id);
        
        if(isset($data['insiden']['id'])){
            $data['_view'] = 'insiden/view';
            $this->load->view('layouts/main',$data);   
        }
    }
}
