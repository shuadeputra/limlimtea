  <header id="main-header" class="py-2 bg-info text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil"></i> Posts Seo</h1>
        </div>
      </div>
    </div>
  </header>
  

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Seo</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>Title</th>
                  <th>Keywords</th>
                  <th>Description</th>
                  <th></th>
                </tr>
                
              </thead>
              
              <tbody>
                <?php foreach($getseo as $row) { ?>
                <tr>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['keywords'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><a href="<?php echo base_url(); ?>posts_seo/editProduct/<?php echo $row["seo_id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-angle-double-right"></i> Edit
                  </a>
                  
                  </td>
                  
                  </tr>
                <?php } ?>
                
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </section>


