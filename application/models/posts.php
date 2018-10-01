<?php 
    class ProductsModel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
class User extends CI_Model{
    function __construct() {
        $this->tableName = 'product_tbl';
        $this->primaryKey = 'product_id';
    }
    
    public function insert($data = array()){
        if(!array_key_exists("date",$data)){
            $data['date'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
}