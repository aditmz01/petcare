<!DOCTYPE html>
<html lang="en">
<head>
    <title>PETCARE | Solusi Kesehatan Hewan Peliharaan Anda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css')?>">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><img class="image" src="<?php echo base_url(); ?>logo.jpg" width="60px" style="padding:15px"><b><a href="#">PETCARE GROUPS</a></b></li>              
            </ul>
            <div class="navbar_menu">
                <ul class="menu">
                    <li id="home"><a href="<?= base_url(); ?>" ><font color="white">HOME</font></a></li>
                    <li><a href="#"><font color="white">PRODUCT</font></a></li>
                    <li><a href="#"><font color="white">ABOUT</font></a></li>
                    <li><a href="<?php echo base_url(); ?>contact"><font color="white">CONTACT</font></a></li>                    
                    <li><a href="<?php echo base_url(); ?>login""><font color="white">LOGIN</font></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <img class="image" src="<?php echo base_url(); ?>logo.jpg" width="60px" style="padding:15px">
                        <h2>LOGIN TO YOUR ACCOUNT</h2>
                    </center>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url('dashboard/login'); ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Username Anda Disini" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Password Anda Disini" name="password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
<body>
</body>
</html>
