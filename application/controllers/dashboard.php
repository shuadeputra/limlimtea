<?php 
 class dashboard extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();             
        $this->load->model("subscribemodel");
        $this->load->model("ProductsModel");
        $this->load->model("blogmodel");
        $this->load->model("contactmodal");
        $this->load->model("seomodel");
	 }
     
	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
     
	 public function index() {
		$data["content_page"]="admin/dashboard";     
		$this->load->view("admin/index",$data); 
	 }
         }