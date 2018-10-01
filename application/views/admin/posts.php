<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil"></i> Posts Product</h1>
        </div>
      </div>
    </div>
  </header>
  
  
  <!-----Button---->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Add Post
          </a>
        </div>
        </div>
      </div>
    </section>
  
  

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>No.</th>
                  <th>Nama Product</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               <?php $no=1; ?>
                <?php foreach($getpost as $row) { ?>
                <tr>
               
                 
                  <td scope="row"><?php echo $no; ?>    </td>
                  <td><?php echo $row['product_name'] ?></td>
                  <td><?php echo $row['product_kategori'] ?></td>
                  <td>Rp. <?php echo number_format($row['product_price']) ?></td>
                  <td><a href="<?php echo base_url(); ?>posts/editProduct/<?php echo $row["product_id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-angle-double-right"></i> Edit
                  </a>
                 <a onClick="javascript: return confirm('Are you sure to delete this data ?');" href="<?php echo base_url(); ?>posts/deleteProduct/<?php echo $row["product_id"]; ?>" class="btn btn-danger" title="Delete">
                    <i class="fa fa-trash"></i> Deleted
                  </a>
                  
                  </td>
                    
                </tr>
                <?php $no++; ?>
                <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POST MODAL -->
  
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
          <form action="<?php echo base_url(); ?>posts/addProductSubmit" method="post" enctype="multipart/form-data">

            <div class="modal-body">
            <div class="form-group">
                 
                 <input type="hidden" name="product_id" value="" />
                 
                  <label for="title">Nama Product</label>
                  <input id="product_name" name="product_name" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="title">Harga</label>
                  <input id="product_price" name="product_price" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="title">Kategori</label>
                  <select id="product_kategori" name="product_kategori" class="form-control">
                    <option value="Dingin">Dingin</option>
                    <option value="Panas">Panas</option>
                  </select>
                </div>
            <div class="form-group">
              <div class="element"> 
                        <label for="product_gambar">Attachments</label><br>
						<input type="file" name="product_gambar" id="product_gambar"/>
					</div>
            </div>
            <div class="form-group">
              <label for="body">Deskripsi</label>
              <textarea name="product_dsc" id="product_dsc" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">

          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
          </form>

            </div>
    </div>
  </div>
