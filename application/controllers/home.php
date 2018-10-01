<?php 
 class home extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->load->model("subscribemodel"); 
        $this->load->model("contactmodal");
        $this->load->model("indexmodel");
        $this->load->model("blogmodel");
        $this->load->library("pagination");
        $this->load->model("seomodel");
         
	 }
	 
//     private $limit = 10;
     
	 public function index() {
        $config=array();
            $config["base_url"]=base_url() . "home";
            $config["per_page"]=4;
            $config["uri_segment"]=2;
            $config["total_rows"]=$this->indexmodel->gettotalblog();

            $config["full_tag_open"]="<ul>";
            $config["full_tag_close"]="</ul>";
            
            $config["first_tag_open"]="<li class='paging_item'>";
            $config["first_link"]="&lt;&lt;";
         
            $config["first_tag_close"]="</li>";
            
            $config["last_tag_open"]="<li class='paging_item'>";
            $config["last_link"]="&gt;&gt;";
            $config["last_tag_close"]="</li>";
            
            $config["prev_tag_open"]="<li class='paging_item'>";
            $config["prev_link"]="&lt;";
            $config["prev_tag_close"]="</li>";
            
            $config["next_tag_open"]="<li class='paging_item'>";
            $config["next_link"]="&gt;";
            $config["next_tag_close"]="</li>";
            
            $config["cur_tag_open"]="<li class='paging_item paging_item_active'>";
            $config["cur_tag_close"]="</a></li>";
            
            $config["num_tag_open"]="<li class='paging_item'>";
            $config["num_tag_close"]="</li>";

            $this->pagination->initialize($config);

           $start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

           $data['getblogpage']=$this->indexmodel->getblogpage($start_data,$config["per_page"]);
         
         
//         $this->load->model('indexmodel', 'getblogpage');
//         $query = $this->contact->all($this->limit);
//		$total_rows = $this->contact->count();		
//
//		$this->load->helper('app');
//		$pagination_links = pagination($total_rows, $this->limit);
//         
//         
        $data["content_page"]="content";
        $data['getproduct']=$this->indexmodel->getproduct(4);
        $data['getseo']=$this->seomodel->getseo();
		$this->load->view("index",$data); 
	 }
     
     
     
//     MASUKIN DATA KE SUBCRIBE
      public function addsubscribe() {
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        
        
        $sql="INSERT INTO subscribe_tbl(nama,email) 
         VALUES ('". $nama . "',
         '". $email . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "home"); 
        
     }
     
     
//     MASUKIN DATA KE CONTACT
      public function addcontact() {
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        $massage=$_POST["massage"];
        $date = date('Y-m-d');
        
        
        $sql="INSERT INTO contact_form_tbl(nama,email,massage,date) 
         VALUES ('". $nama . "',
         '". $email . "',
         '" . $massage . "',
         '". $date . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "home"); 
        
     }
     
     
     
         }