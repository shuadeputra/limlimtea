<?php 
    class indexmodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
            
        }
        
        
         public function getproduct($limit=0) {
            if ($limit>0) {
            $sql="SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT " . $limit;
        }
            $query=$this->db->query($sql);
            return $query->result();
			
	}
        
        public function gettotalblog() {
        $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC";
        $query=$this->db->query($sql);
        return $query->num_rows();
        
    }  
        
        
     public function getblogpage($start=0,$limit=0) {
        if ($limit>0) {
            $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC LIMIT " . $start . "," . $limit;
            $query=$this->db->query($sql);
            return $query->result_array();
            
        }
        else {
            return NULL;
            
        }
        
    }
        
        
    }