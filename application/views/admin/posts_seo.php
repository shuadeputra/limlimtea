 
   <header id="main-header" class="py-2 bg-info text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Post One</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>posts_seo" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Posts
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($data_seo)) { ?>

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
              <form action="<?php echo base_url(); ?>posts_seo/editProductSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="seo_id" value="<?php echo $data_seo->seo_id; ?>" />
               
                <div class="form-group">
                  <label for="title">Title</label>
                  <input id="title" name="title" type="text" class="form-control" value="<?php echo $data_seo->title; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Keywords</label>
                  <input id="keywords" name="keywords" type="text" class="form-control" value="<?php echo $data_seo->keywords; ?>">
                </div>
            
                <div class="form-group">
                  <label for="body">Description</label>
                  <textarea name="description" id="description" class="form-control"><?php echo $data_seo->description; ?></textarea>
                </div>
              
              <div class="col-md-3">
              <button type="submit" class="btn btn-info add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </section>