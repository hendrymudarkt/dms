<?php
class Insiden_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_insiden($id){
        return $this->db->get_where('insiden_ketidaksesuaian',array('id'=>$id))->row_array();
    }
    
    function get_stat_insiden($id){
        return $this->db->get_where('stat_insiden',array('id_insiden'=>$id))->row_array();
    }
    
    function get_all_insiden(){
        return $this->db->get('insiden_ketidaksesuaian')->result_array();
    }
    
    function add_insiden($params){
        $this->db->insert('insiden_ketidaksesuaian',$params);
        return $this->db->insert_id();
    }
    
    function add_stat_insiden($params){
        $this->db->insert('stat_insiden',$params);
        return $this->db->insert_id();
    }
    
    function update_insiden($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('insiden_ketidaksesuaian',$params);
    }
    
    function delete_insiden($id){
		$this->db->where('id',$id);
        return $this->db->delete('insiden_ketidaksesuaian');
    }
    
    function delete_stat_insiden($id){
		$this->db->where('id_insiden',$id);
        return $this->db->delete('insiden_ketidaksesuaian');
    }
}
