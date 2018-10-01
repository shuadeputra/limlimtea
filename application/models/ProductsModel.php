<?php 
    class ProductsModel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
    
        
    public function getProducts($limit=0) {
        if ($limit>0) {
            $sql="SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT " . $limit;
            
        }
        else {
        $sql="SELECT * FROM product_tbl ORDER BY product_id DESC";
        }
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }    
  
//    public function getProductDetail($product_id) {
//        $sql="SELECT * FROM product_tbl WHERE product_id=" . $product_id;
//        $query=$this->db->query($sql);
//        return $query->row();
//        
//    }
        
    public function getTotalProducts() {
        $sql="SELECT * FROM product_tbl";
        $query=$this->db->query($sql);
        return $query->num_rows();
        
    }  
        
    public function getProductsPage($start=0,$limit=0) {
        if ($limit>0) {
            $sql="SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT " . $start . "," . $limit;
            $query=$this->db->query($sql);
            return $query->result_array();
            
        }
        else {
            return NULL;
            
        }
        
    }
    
        
//    Lembaran baru yang baru di mulai
        
    public function getGambarProduct($product_id=0) {
      $result="";
      if ($product_id>0) {    
        $sql="SELECT product_gambar FROM product_tbl WHERE product_id=" . $product_id;
        $query=$this->db->query($sql);
        $rows=$query->row();
        $result=$rows->product_gambar;
          
        }
        return $result;
      }
        
        
     public function getpost() {  
        $sql="SELECT * FROM product_tbl ORDER BY product_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        public function getdetail($product_id) {
        $sql="SELECT * FROM product_tbl WHERE product_id=" . $product_id;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
} 

