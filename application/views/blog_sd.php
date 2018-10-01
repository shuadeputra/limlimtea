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
              <a href="<?= base_url() ?>blog/blog_detail/<?= $rows['blog_id'] ?>" class="btn btn-warning btn-block">Read More</a>
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