<?php 
    class contactmodal extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
            
        }
          
        
     public function getcontact() { 
        $sql="SELECT * FROM contact_form_tbl ORDER BY contact_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        
        
        
    }