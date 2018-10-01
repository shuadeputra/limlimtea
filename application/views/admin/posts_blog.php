  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil"></i> Posts Blog</h1>
        </div>
      </div>
    </div>
  </header>
  
  <!-----Button---->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Add Blog
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
              <h4>Latest BLog</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>No.</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th></th>
                </tr>
                
              </thead>
              
              <tbody>
               <?php $no=1; ?>
                <?php foreach($getblog as $row) { ?>
                <tr>
                  <td scope="row"><?php echo $no; ?></td>
                  <td><?php echo $row['blog_name'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><a href="<?php echo base_url(); ?>posts_blog/editProduct/<?php echo $row["blog_id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-angle-double-right"></i> Edit
                  </a>
                  <a onClick="javascript: return confirm('Are you sure to delete this data ?');" href="<?php echo base_url(); ?>posts_blog/deleteblog/<?php echo $row["blog_id"]; ?>" class="btn btn-danger" title="Delete">
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
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Blog</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(); ?>posts_blog/addProductSubmit" method="post" enctype="multipart/form-data">
           
            <div class="modal-body">
            <div class="form-group">
                 
                 <input type="hidden" name="blog_id" value="" />
                 
                  <label for="title">Judul</label>
                  <input name="blog_name" id="blog_name" type="text" class="form-control" value="">
                </div>
           <div class="form-group">
              <div class="element"> 
                        <label for="blog_foto">Attachments</label><br>
						<input type="file" name="blog_foto" id="blog_foto"/>
					</div>
            </div>
            <div class="form-group">
              <label for="body">Deskripsi</label>
              <textarea id="blog_dsc" name="blog_dsc" class="form-control"></textarea>
            </div>
              </div>
              
              <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success add" >Save Changes</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
