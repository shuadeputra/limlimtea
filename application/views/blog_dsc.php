
  
  <!---BLOG----->
  
  <section id="about" class="py-5 bg-light">
      <div class="container">
          <div class="row">
                 <?php if (isset($data_blog)) { ?>
                 
                 <input type="hidden" name="blog_id" value="<?php echo $data_blog->blog_id; ?>" />
                 
                <div class="col-lg-6">
                  <img src="<?php echo base_url(); ?>img/blog/<?php echo $data_blog->blog_foto; ?>" class="d-block img-fluid" alt="Cinque Terre">
                      <p class="lead">share this :</p>
                       <div class="d-flex flex-row justify-content-center">
                        
                         <div class="p-2">
                          <a href="#"><i class="fa fa-facebook-official fa-4x"></i></a>
                         </div>
                         <div class="p-2">
                          <a href="#"><i class="fa fa-google-plus-square fa-4x"></i></a>
                         </div>
                         <div class="p-2">
                          <a href="https://www.instagram.com/limlim_thaitea/"><i class="fa fa-instagram fa-4x"></i></a>
                         </div>
                        </div>
                        <hr>
                      </div>
                      
    <div class="col-lg-6">
          <h1 class="text-warning"><?php echo $data_blog->blog_name; ?></h1>
              <h3>Tanggal: <?php echo $data_blog->date; ?></h3>
                      <p class="text-justify"> <?php echo $data_blog->blog_dsc; ?></p>
              </div>
              <?php } ?>
             </div>
            </div>
      
  </section>
  

    <!-- BLOG -->
  <section id="blog_1" class="py-5">
    <div class="container">
     <h1 class="text-warning pb-3 text-center">Blog</h1>
        <hr>
      <div class="row">
      
      <?php foreach($getblogpage as $rows) { ?>
       
        <div class="col-md-3" >
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
      
<!--
    <table id="myTable" class="display" width="100%">
          <thead>              
               <tr>          
             <?php foreach($getblogpage as $rows) { ?>
                        <td>
                    
                  </td>
        
            <?php } ?>
    
              </tr>
          </thead>
          <tbody>
             <tr>          
              
         <?php foreach($getblogpage as $rows) { ?>
              <td >
                <div class="col-md-12" >
                <div class="card text-center border-warning">
                   <img class="card-img-top" src="<?php echo base_url(); ?>img/blog/<?= $rows['blog_foto'] ?>" width="300" height="250" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="text-warning"><?= substr($rows['blog_name'],0,10) ?></h3>
                      <p class="text-muted"><?= substr($rows['blog_dsc'],0,90) ?></p>
                      <a href="<?= base_url() ?>blog_detail/<?= $rows['blog_id'] ?>" class="btn btn-warning btn-block">Read More</a>
                    </div>
                  </div>
                </div>   
              </td>

        <?php } ?>
              </tr> 
          </tbody>
             
            </table>
-->
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
    
    

<!--
    <script language="Javascript" type="text/javascript">
    
      $(".paging").on("click", ".pagination li a", function() {
          var theUrl = $(this).attr('href');
          
          $("#blog_1").load(theUrl);
          return false;
      });
</script>
-->
 
  </section>
  
  
