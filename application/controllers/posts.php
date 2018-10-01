<?php 
 class posts extends CI_Controller {
	 public function __construct() {
		parent::__construct();
         $this->is_login();
         $this->load->model("ProductsModel");
    
        $uploadconfig["upload_path"]="./img/product/"; 
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
		$data["content_page"]="admin/posts"; 
        $data['getpost']=$this->ProductsModel->getpost();
		$this->load->view("admin/index",$data); 
	 }
     
    public function addProduct() {
		$data["content_page"]="add_form";
		$this->load->view("admin/index",$data); 
	 }
     
    public function addProductSubmit() {
        $product_name=$_POST["product_name"];
        $product_price=$_POST["product_price"];
        $product_kategori=$_POST["product_kategori"];
        $product_dsc=$_POST["product_dsc"];
        $product_gambar="";
        $date = date('Y-m-d');
        
        //var_dump($product_name);exit();
         if ($this->upload->do_upload("product_gambar")) {
            $product_gambar=$this->upload->file_name;
            
         }
        
        $sql="INSERT INTO product_tbl(product_name,product_price,product_kategori,product_dsc,product_gambar,date) 
         VALUES ('". $product_name . "',
         " . $product_price . ",
         '". $product_kategori . "',
         '". $product_dsc . "',
         '" . $product_gambar . "',
         '". $date . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "posts"); 
        
     }
        
     public function editProduct($product_id=0) {
      if ($product_id>0) {
		$data["content_page"]="admin/details";
        $data["data_product"]=$this->ProductsModel->getdetail($product_id);
		$this->load->view("admin/index",$data); 
	 }
     
         }
     
      public function editProductSubmit() {
        $product_id=$_POST["product_id"];
        $product_name=$_POST["product_name"];
        $product_price=$_POST["product_price"];
        $product_kategori=$_POST["product_kategori"];
        $product_dsc=$_POST["product_dsc"];
        $product_gambar=$_FILES["product_gambar"];
        $date = date('Y-m-d');
        $gambar_old="./img/product/" . $_POST["gambar_old"]; 
        
          //var_dump($product_gambar);exit();
        if($product_gambar['name']!=NULL){
             if($this->upload->do_upload("product_gambar")) {
                 if (file_exists($gambar_old)) {
                     unlink($gambar_old);
                 }  
                 $product_gambar=$this->upload->file_name;
            }

            $sql="UPDATE product_tbl SET
             product_name='" . $product_name . "',
             product_price=" . $product_price . ",
             product_kategori='" . $product_kategori . "',
             product_dsc='" . $product_dsc . "',
             product_gambar='" . $product_gambar . "',
             date   ='" . $date . "'
             WHERE product_id=" . $product_id;            
        }else{
             $sql="UPDATE product_tbl SET
             product_name='" . $product_name . "',
             product_price=" . $product_price . ",
             product_kategori='" . $product_kategori . "',
             product_dsc='" . $product_dsc . "',
             date   ='" . $date . "'
             WHERE product_id=" . $product_id;                        
        }
         
          
//          echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "posts");
         
         
     }
     
       public function deleteProduct($product_id) {
         $product_gambar=$this->ProductsModel->getGambarProduct($product_id);
         $product_gambar="./img/product/" . $product_gambar;
         
         if (file_exists($product_gambar)) {
             unlink($product_gambar);
             
         }
         
         $sql="DELETE FROM product_tbl WHERE product_id=" . $product_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "posts");
     }
     
     
     
     
 }