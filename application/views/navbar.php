<!DOCTYPE html>
<html lang="en">
<head>
  <title>PETCARE | Solusi Kesehatan Hewan Peliharaan Anda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets\css\bootstrap.min.css"></script>
</head>
<style>
    .navbar{
        background-color: black;
        height : 100%;
        width : 100%;
    }
    #navbar_name{
        display : inline-table;
    }
    .navbar-inverse{
        margin-bottom: 0;
    }
    li{
        padding : 10px;
        color : white;
    }
    ul li {
        position: relative;
    }
    ul li a{
        font-weight: bolder;
        color: #FFFF;   
    }
    ul li a:hover{
        font-weight: bolder;
        color: #FFFF;   
    }
    #home{
        background-color: #006FFF;  
    }
    .navbar_menu ul li{
        position: relative;
    }
    .navbar_menu ul li a:after{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 0%;
        content: '.';
        color: transparent;
        background: #aaa;
        height: 1px;
    }
    .navbar_menu ul li a:hover:after {
        width: 100%;
    }
</style>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><img class="image" src="<?php echo base_url(); ?>logo.jpg" width="60px" style="padding:15px"><b><a href="#">PETCARE GROUPS</a></b></li>              
            </ul>
            <div class="navbar_menu">
                <ul class="nav navbar-nav navbar-right">                
                    <li id="home"><a href="<?= base_url(); ?>" ><font color="white">HOME</font></a></li>
                    <li><a href="#"><font color="white">PRODUCT</font></a></li>
                    <li><a href="#"><font color="white">ABOUT</font></a></li>
                    <li><a href="<?php echo base_url(); ?>dashboard/contact""><font color="white">CONTACT</font></a></li>                    
                    <li><a data-toggle="modal" data-target="#login"><font color="white">LOGIN</font></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
    </div>
<body>
</body>
</html>
