<?php 
 class subscribe extends CI_Controller {
	 public function __construct() {
		parent::__construct();
         $this->load->model("subscribemodel");
         $this->is_login();
	 }
     
     	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
	 
	 public function index() {
		$data["content_page"]="admin/subscribe"; 
        $data['getsubscribe']=$this->subscribemodel->getsubscribe();
		$this->load->view("admin/index",$data); 
	 }
     
    public function deletesubscribe($subscribe_id) {
         $sql="DELETE FROM subscribe_tbl WHERE subscribe_id=" . $subscribe_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "subscribe");
     }
     
     
     
     
         }