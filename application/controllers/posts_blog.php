<?php 
 class posts_blog extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();
        $this->load->model("blogmodel");
    
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
		$data["content_page"]="admin/posts_blog"; 
        $data['getblog']=$this->blogmodel->getblog();
		$this->load->view("admin/index",$data); 
	 }
     
     //masukin pos blog
     
     public function addProductSubmit() {
        $blog_name=$_POST["blog_name"];
        $blog_dsc=$_POST["blog_dsc"];
        $blog_foto="";
        $date = date('Y-m-d H:i:s');
        
        //var_dump($product_name);exit();
         if ($this->upload->do_upload("blog_foto")) {
            $blog_foto=$this->upload->file_name;
            
         }
        
        $sql="INSERT INTO blog_tbl(blog_name,blog_dsc,blog_foto,date) 
         VALUES ('". $blog_name . "',
         '". $blog_dsc . "',
         '" . $blog_foto . "',
         '". $date . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "posts_blog"); 
        
     }
     
     public function editProduct($blog_id=0) {
      if ($blog_id>0) {
		$data["content_page"]="admin/details_blog";
        $data["data_blog"]=$this->blogmodel->getdetailblog($blog_id);
		$this->load->view("admin/index",$data); 
	 }
     
     }
     
     public function editProductSubmit() {
        $blog_id=$_POST["blog_id"];
        $blog_name=$_POST["blog_name"];
        $blog_dsc=$_POST["blog_dsc"];
        $blog_foto=$_FILES["blog_foto"];
        $date = date('Y-m-d H:i:s');
        $gambar_old="./img/blog/" . $_POST["gambar_old"]; 
        
          //var_dump($product_gambar);exit();
        if($blog_foto['name']!=NULL){
             if($this->upload->do_upload("blog_foto")) {
                 if (file_exists($gambar_old)) {
                     unlink($gambar_old);
                 }  
                 $blog_foto=$this->upload->file_name;
            }

            $sql="UPDATE blog_tbl SET
             blog_name='" . $blog_name . "',
             blog_dsc='" . $blog_dsc . "',
             blog_foto='" . $blog_foto . "',
             date   ='" . $date . "'
             WHERE blog_id=" . $blog_id;            
        }else{
              $sql="UPDATE blog_tbl SET
             blog_name='" . $blog_name . "',
             blog_dsc='" . $blog_dsc . "',
             date   ='" . $date . "'
             WHERE blog_id=" . $blog_id;                       
        }
         
          
//          echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "posts_blog");
         
         
     }
     
     public function deleteblog($blog_id) {
         $blog_foto=$this->blogmodel->getGambarBlog($blog_id);
         $blog_fotor="./img/blog/" . $blog_foto;
         
         if (file_exists($blog_foto)) {
             unlink($blog_foto);
             
         }
         
         $sql="DELETE FROM blog_tbl WHERE blog_id=" . $blog_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "posts_blog");
     }
     
     
     
         }