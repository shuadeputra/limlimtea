<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thai tea Admin</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrapb.css">
  
  <!-- Faficon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
  <!-- End Faficon -->
  
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="" class="navbar-brand">Login Admin</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> Lim - Lim</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>

  <!-- LOGIN -->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>AdminLogin/loginSubmit" method="post">
                <div class="form-group">
                  <label for="username" name="username">username</label>
                  <input id="login" type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label for="password" name="pass">Password</label>
                  <input id="pass" type="password" class="form-control" name="pass">
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login"> <a class="button hide" href="">
              <?php echo validation_errors(); ?>
                    <?php if (isset($loginerror)) { ?>
                    <?php echo $loginerror; ?>
                    <?php } ?></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2017</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
