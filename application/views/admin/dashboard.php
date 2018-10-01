  
   
   
   <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
  <br>


  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts Product</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM product_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>posts" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Posts Blog</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM blog_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>posts_blog" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Contact Form</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> <?php $query = $this->db->query('SELECT * FROM contact_form_tbl'); echo $query->num_rows(); ?>
                
              </h1>
              <a href="<?php echo base_url(); ?>contact_form" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Subscribe</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> <?php $query = $this->db->query('SELECT * FROM subscribe_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>subscribe" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Seo</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM seo_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>seo" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>