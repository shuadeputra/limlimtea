<?php 
 class AdminLogin extends CI_Controller {
	 public function __construct() {
		parent::__construct(); 
         $this->load->library('form_validation');
         $this->load->library('session');
         $this->load->model('AdminModel');
	 }
	 
	 public function index() {
		$this->load->view("admin/login"); 
	 }
     
     public function loginSubmit(){
         $this->form_validation->set_rules('username','Username','required',array('required'=>'Please Fill UserName'));
         $this->form_validation->set_rules('pass','Password','required',array('required'=>'Please Fill Password'));
         
         if($this->form_validation->run()==false) {
             $this->load->view("admin/login");
             
         }
         
         else {
             if ($this->AdminModel->checkAdmin($_POST["username"],$_POST["pass"])>0) {
                $this->session->set_userdata("username",$_POST["username"]);
                 redirect(base_url() . "dashboard");
             }
             else {
                 $data["loginerror"]="Username & Password Wrong";
                 $this->load->view("admin/login",$data);
                 
             }
         }
         
         
     }
     
     public function logOut(){
         $this->session->sess_destroy();
         $this->load->view("admin/login");
         
     }
     
     public function getlogin()
     {
         $u = $this->input->post('username');
         $p = $this->input->post('password');
         $this->load->model('model_login');
     }
     
     
     
     
     
 }

