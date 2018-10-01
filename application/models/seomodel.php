<?php 
    class seomodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
        
        
     public function getseo() {  
        $sql="SELECT * FROM seo_tbl ORDER BY seo_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        public function getdetailseo($seo_id) {
        $sql="SELECT * FROM seo_tbl WHERE seo_id=" . $seo_id;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
    }