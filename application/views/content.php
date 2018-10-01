<!-- SHOWCASE -->
  <section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <h1 class="display-2 mt-5 pt-5">
              Lim-Lim<br>Thai Tea
            </h1>
            <p class="lead">The best thai tea your ever know <br> BUY 3 GET 1 FREE</p>
          </div>
          <div class="col-lg-6">
            <img src="<?php echo base_url(); ?>img/gbdp.png" alt="" class="img-fluid d-none d-lg-block">
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- ABOUT / WHY SECTION -->
  <section id="about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
          <div class="info-header mb-5">
            <h1 class="text-warning pb-3">
              About us
              </h1></div>
       <div class="media">
            <div class="media-left">
                <img src="<?php echo base_url(); ?>img/cowok.png" class="media-object" style="width:20vw">
           </div> <div class="media-body">
    <h1 class="media-heading text-warning pb-3">Lim-Lim</h1>
    <p class="lead text-left">Lim-lim thai tea berdiri pada tahun 2017 bulan oktober. karena melihat ditengah semakinnya meraknya Thai tea di dunia, maka dibuatlah thai tea dengan merek lim-lim dengan arti minum dan minum, Meskipun kini banyak retail penjual Thai Tea di Indonesia, kamu bisa menjadikan Lim-Lim Thai Tea sebagai opsi terbaik kamu.</p>
  </div>
       </div>
       <br>
       <div class="media">
            <div class="media-body">
    <h1 class="media-heading text-warning pb-3 ">Lim-Lim</h1>
    <p class="lead text-justify text-right "> Thai Tea yang dapat ditemukan disini adalah Thai Tea authentic dengan campuran black tea yang sangat pekat dan beraroma kuat yang dicampur dengan condensed milk, evaporated milk, dan tentu saja dengan tambahan gula yang kemudian diaduk selama teh masih panas. Setelah itu, kamu bisa memilih apakah ingin menikmatinya selagi panas atau dengan tambahan es. Tentu Thai Tea dingin sangat menggiurkan!</p>
  </div>
       <div class="media-right">
                <img src="<?php echo base_url(); ?>img/cewek.png" class="media-object" style="width:20vw">
           </div>
       </div>
        </div>
      </div>
      <hr>
  </section>




  <!-- FLAVOR -->
  <section id="flavor" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-warning pb-3">
              Our Flavor
            </h1>
            <p class="lead pb-3">
              This is our product lim-lim thai tea flavor you can choice
            </p>
          </div>
        </div>
      </div>
      
      <div class="row">
       <?php foreach($getproduct as $row) { ?>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>img/product/<?php echo $row->product_gambar; ?>" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3><?php echo $row->product_name; ?><br>บุตรชายที่ฉลาด</h3>
              <h5 class="text-muted">Rp. <?php echo number_format($row->product_price); ?></h5>
              <p><?php echo $row->product_dsc; ?></p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="https://www.instagram.com/limlim_thaitea/"><i class="fa fa-book"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://www.instagram.com/limlim_thaitea/"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <?php } ?>
      </div>
      
    </div>
  </section>
  <hr>
  
  
    <!-- SUBSCRIBE -->
  <section id="newsletter" class="bg-dark text-white py-5">
   <form action="<?php echo base_url(); ?>home/addsubscribe" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
       
        <div class="col-md-4">
          <input name="nama" id="nama" type="text" class="form-control form-control-lg" placeholder="Enter Name" value="">
        </div>
        <div class="col-md-4">
          <input name="email" id="email" type="email" class="form-control form-control-lg" placeholder="Enter Email" value="">
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning btn-lg btn-block"><i class="fa fa-envelope-open-o"></i> Subscribe</button>
        </div>
          
      </div>
    </div>
      </form>
  </section>
  <hr>
  
  
  <!-- BLOG -->
  
  <section id="blog" class="py-5">
    <div class="container">
     <h1 class="text-warning pb-3 text-center">Blog</h1>
        <hr>
      <div class="row">
      
       <?php foreach($getblogpage as $rows) { ?>
       
        <div class="col-md-3">
          <div class="card text-center border-warning">
           <img class="card-img-top" src="<?php echo base_url(); ?>img/blog/<?= $rows['blog_foto'] ?>" width="300" height="250" alt="Card image cap">
            <div class="card-body">
              <h3 class="text-warning"><?= substr($rows['blog_name'],0,10) ?></h3>
              <p class="text-muted"><?= substr($rows['blog_dsc'],0,90) ?></p>
              <a href="<?= base_url() ?>blog_detail/<?= $rows['blog_id'] ?>" class="btn btn-warning btn-block">Read More</a>
            </div>
          </div>
        </div>
        
        <?php } ?>
        </div>
        
        
     <hr>
         <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled ">
                  <div class="pagination">      
             <?php echo $this->pagination->create_links();?>
               
                </div>
              </ul>
            </nav>
    </div>
    
  </section>
  


<!--
<script language="Javascript" type="text/javascript">
    
      $(".paging").on("click", ".pagination a", function() {
          var theUrl = $(this).attr('href');
          
          $("#blog").load(theUrl);
          return false;
      });
</script>
-->
  
  
  
  
  
  

  <!-- CONTACT -->
  <section id="contact" class="bg-light py-5">
   <form action="<?php echo base_url(); ?>home/addcontact" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Contact Form</h3>
          <p class="lead">Silakan tuliskan pesanan anda.</p>
          <form>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="nama" id="nama" type="text" class="form-control" placeholder="Name" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="email" id="email" type="email" class="form-control" placeholder="Email" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea name="massage" id="massage" class="form-control" placeholder="Message" rows="5"></textarea>
              </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-warning btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
            <h3> Contac us</h3><hr>
            <h2 class="fa fa-instagram fa-lg">&nbsp; @limlimthaitea</h2>
            <h2 class="fa fa-envelope-o fa-lg">&nbsp;limlim@gmail.com</h2>
            <h2 class="fa fa-phone fa-lg">&nbsp; 081249621499</h2>
            <h2 class="fa fa-map-marker fa-lg">&nbsp; Jl.antara ujung</h2>
        </div>
      </div>
    </div>
      </form>
  </section>