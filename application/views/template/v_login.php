
 <head> 
    <title>PETCARE | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css')?>">
</head>
<style>
    #register{
        display: block;
    }
</style>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Sign In</b></h5>
            <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
            <?php } ?>
            <form class="form-signin" action="<?= base_url()?>login/aksi_login" method="POST">
              <div class="form-label-group">
                <input type="text" id="username" class="form-control" name="username"placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control" name="password"placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <h6><center>Dont Have Account ?</center></h6>
              <center><a class="btn btn-lg btn-success btn-block text-uppercase" href="<?= base_url()?>register">Register Account</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>