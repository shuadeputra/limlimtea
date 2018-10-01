 <header id="main-header" class="py-2 bg-danger text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-folder"></i> Contact Form</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- CATEGORIES -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Contact Form</h4>
            </div>
            <table class="table table-responsive" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Massage</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach($getcontact as $row) { ?>
                <tr>
                  <td scope="row"><?php echo $no; ?></td>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['massage'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td>
                  <a onClick="javascript: return confirm('Are you sure ti delete this data ?');" href="<?php echo base_url(); ?>contact_form/deletecontact/<?php echo $row["contact_id"]; ?>" class="btn btn-danger" title="Delete">
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
