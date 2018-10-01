<?php
    class AdminModel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        
        }
        
       public function checkAdmin($username,$password) {

//           $sql="SELECT username,password FROM admin_tbl 
//           WHERE username='" . $username . "' AND password='" . md5($password) . "'";
//           $result=$this->db->query($sql);
//           return $result->num_rows();
           
           return $this->db->get_where('admin_tbl',array('username' => $username,'password' => $password))->num_rows();
       }
           
    
    }