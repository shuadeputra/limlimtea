<header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Post Blog</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>posts_blog" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Blog
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($data_blog)) { ?>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Post</h4>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url(); ?>posts_blog/editProductSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="blog_id" value="<?php echo $data_blog->blog_id; ?>" />
               
               
                <div class="form-group">
                  <label for="title">Judul</label>
                  <input id="blog_name" name="blog_name" type="text" class="form-control" value="<?php echo $data_blog->blog_name; ?>">
                </div>
                <div class="form-group">
                
                 <label for="blog_foto">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/blog/<?php echo $data_blog->blog_foto; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old" value="<?php echo $data_blog->blog_foto; ?>" />
                 
                  <input type="file" name="blog_foto" id="blog_foto" />
                  
                </div>
                <div class="form-group">
                  <label for="body">Deskripsi</label>
                  <textarea id="blog_dsc" name="blog_dsc" class="form-control"><?php echo $data_blog->blog_dsc; ?></textarea>
                </div>
              
              <div class="col-md-3">
          <button type="submit" class="btn btn-success add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php } ?>
  </section>