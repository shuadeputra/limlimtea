<?php 
 class posts_seo extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();
        $this->load->model("seomodel");
    
        $uploadconfig["upload_path"]="./img/blog/"; 
        $uploadconfig["allowed_types"]="gif|jpg|png";
        $uploadconfig["max_size"]=10240;
        $this->load->library("upload",$uploadconfig);
	 }
     
     	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
	 
	 public function index() {
		$data["content_page"]="admin/seo"; 
        $data['getseo']=$this->seomodel->getseo();
		$this->load->view("admin/index",$data); 
	 }
     
     
     public function editProduct($seo_id=0) {
      if ($seo_id>0) {
		$data["content_page"]="admin/posts_seo";
        $data["data_seo"]=$this->seomodel->getdetailseo($seo_id);
		$this->load->view("admin/index",$data); 
	 }
     
     }
     
     public function editProductSubmit() {
        $seo_id=$_POST["seo_id"];
        $title=$_POST["title"];
        $keywords=$_POST["keywords"];
        $description=$_POST["description"];

              $sql="UPDATE seo_tbl SET
             title='" . $title . "',
             keywords='" . $keywords . "',
             description  ='" . $description . "'
             WHERE seo_id=" . $seo_id;                       
        
         
          
//          echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "posts_seo");
         
         
     }
     
     
     
         }