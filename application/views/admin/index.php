<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Area</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrapb.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<!-- Faficon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
  <!-- End Faficon -->


</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="<?php echo base_url(); ?>dashboard" class="navbar-brand">Admin CMS</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>dashboard" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>posts" class="nav-link active">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>posts_blog" class="nav-link active">Blog</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>contact_form" class="nav-link active">Contact Form</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>subscribe" class="nav-link active">Subscribe</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url(); ?>posts_seo" class="nav-link active">Seo</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link">
              <i class="fa fa-user"></i> Welcome <?php if($this->session->has_userdata("username")) { ?><?php echo $this->session->userdata("username"); ?><?php } ?>
            </a>
          </li>
         <li class="nav-item">
             <a href="<?php echo base_url(); ?>AdminLogin/logOut" class="nav-link"><span class="fa fa-user-times"></span> logout</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>


<!----- Header ------>
        	<?php 
                if (isset($content_page)) {
                    $this->load->view($content_page);    
                }
            ?>
            
  
  
  
  <!--- Footer ----->

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2017</p>
        </div>
      </div>
    </div>
  </footer>



  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  
  
  <script>
  $(document).ready(function(){
    $('#myTable').DataTable();
});
    </script>
</body>
</html>

