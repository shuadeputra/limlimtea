<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/adminstyle.css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  
  <!----SEO------>
  <?php if ($content_page == "content"){ ?>
  <?php foreach($getseo as $row) { ?>
	<title><?php echo $row['title'] ?></title>
	<meta name="description" content="<?php echo $row['keywords'] ?>"/>
	<meta name="keywords" content="<?php echo $row['description'] ?>"/>
  
  
  <?php } ?>
  <?php } else {?>
  <?php } ?>
  <!----- End Seo ------->
  
  
  <!-- Faficon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
  <!-- End Faficon -->
  </head>
<body class="paging" id="home">
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="<?php echo base_url();?>home" class="navbar-brand">
        <img src="<?php echo base_url();?>img/limlimlg.png" width="50" height="50" alt=""><h3 class="d-inline align-middle text-warning">&nbsp;Lim-Lim</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <?php if ($content_page == "content"){ ?>
                <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#flavor" class="nav-link">Flavor</a>
          </li>
          <li class="nav-item">
            <a href="#blog" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>  
<?php } else {?>
  <?php } ?>
  </nav>

  <!-----Mulai------>
          	<?php 
                if (isset($content_page)) {
                    $this->load->view($content_page);    
                }
            ?>
  
  
  
  <!-----Akhir------->
  
  
  <!---FOOTER---->

  <footer id="main-footer" class="py-6 bg-warning text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 ml-auto">
          <p class="lead">Copyright &copy; 2017</p>
        </div>
      </div>
    </div>
  </footer>

<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>


<script language="Javascript" type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url(); ?>js/navbar-fixed.js"></script>
 
 

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a321f2df4461b0b4ef88981/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
