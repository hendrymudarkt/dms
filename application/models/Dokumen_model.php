<?php
class Dokumen_model extends CI_Model{
    function __construct(){
        parent::__construct();
	}
	
	function get_kode(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_dokumen,4)) AS kd_max FROM dokumen");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }
    
    function get_dokumen($id){
        return $this->db->get_where('dokumen',array('id_dokumen'=>$id))->row_array();
    }
	
	function get_kategori($jenis, $kategori){
        return $this->db->get_where('dokumen',array('jenis_dokumen'=>$jenis, 'kategori'=>$kategori))->result_array();
    }
    
    function get_all_dokumen(){
		$this->db->order_by('tanggal', 'desc');
        return $this->db->get('dokumen')->result_array();
    }
    
    function add_dokumen($params){
        $this->db->insert('dokumen',$params);
        return $this->db->insert_id();
    }
    
    function update_dokumen($id, $judul, $file, $tanggal, $jenis_dokumen, $id_user){
		$this->db->set('judul', $judul);
		$this->db->set('tanggal', $tanggal);
		$this->db->set('file', $file);
		$this->db->set('owner', $id_user);
		$this->db->set('jenis_dokumen', $jenis_dokumen);
        $this->db->where('id_dokumen',$id);
        return $this->db->update('dokumen');
    }
	
	function update_dokumen2($id, $judul, $tanggal, $jenis_dokumen, $id_user){
		$this->db->set('judul', $judul);
		$this->db->set('tanggal', $tanggal);
		$this->db->set('owner', $id_user);
		$this->db->set('jenis_dokumen', $jenis_dokumen);
        $this->db->where('id_dokumen',$id);
        return $this->db->update('dokumen');
    }
    
    function delete_dokumen($id){
		$this->db->where('id_dokumen',$id);
        return $this->db->delete('dokumen');
    }
}
