<?php 
 class contact_form extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();
        $this->load->model("contactmodal");
	 }
	 
     	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
     
	 public function index() {
		$data["content_page"]="admin/contact_form"; 
        $data['getcontact']=$this->contactmodal->getcontact();
		$this->load->view("admin/index",$data); 
	 }
     
     public function deletecontact($contact_id) {
         $sql="DELETE FROM contact_form_tbl WHERE contact_id=" . $contact_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "contact_form");
     }
     
         }