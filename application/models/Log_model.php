<?php
class Log_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function save_log($param)
    {
        $sql        = $this->db->insert_string('log',$param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
	}
	
	function get_all_log(){
        $this->db->order_by('waktu', 'desc');
        return $this->db->get('log')->result_array();
    }
}
?>
