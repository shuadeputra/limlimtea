 
   <header id="main-header" class="py-2 bg-primary text-white">
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
          <a href="<?php echo base_url(); ?>posts" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Posts
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($data_product)) { ?>

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
              <form action="<?php echo base_url(); ?>posts/editProductSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="product_id" value="<?php echo $data_product->product_id; ?>" />
               
                <div class="form-group">
                  <label for="title">Nama Product</label>
                  <input id="product_name" name="product_name" type="text" class="form-control" value="<?php echo $data_product->product_name; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Harga</label>
                  <input id="product_price" name="product_price" type="price" class="form-control" value="<?php echo $data_product->product_price; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Kategori</label>
                  <input id="product_kategori" name="product_kategori" type="price" class="form-control" value="<?php echo $data_product->product_kategori; ?>">
                </div>
                <div class="form-group">
                
                 <label for="product_gambar">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old" value="<?php echo $data_product->product_gambar; ?>" />
                 
                  <input type="file" name="product_gambar" id="product_gambar" />
                       
                </div>
                <div class="form-group">
                  <label for="body">Deskripsi</label>
                  <textarea name="product_dsc" id="product_dsc" class="form-control"><?php echo $data_product->product_dsc; ?></textarea>
                </div>
              
              <div class="col-md-3">
              <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </section>