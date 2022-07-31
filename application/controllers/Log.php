<?php 
class Log extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Log_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('level') != 1){
            redirect('login/index');
        }

        $data['log'] = $this->Log_model->get_all_log();
        $data['_view'] = 'laporan/activity';
        $this->load->view('layouts/main',$data);
    }
}
