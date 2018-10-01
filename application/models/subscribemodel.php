<?php 
    class subscribemodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
            
        }
        
        
             
        
     public function getsubscribe() { 
        $sql="SELECT * FROM subscribe_tbl ORDER BY subscribe_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        
    }