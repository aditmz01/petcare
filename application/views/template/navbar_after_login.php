<!DOCTYPE html>
<html lang="en">
<head>
    <title>PETCARE | Solusi Kesehatan Hewan Peliharaan Anda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css')?>">
  
</head>
<style>
    .navbar_menu ul li a {
        color : white;
        font-weight: bolder;
    }
    .status {
        margin-top : 15px;  
    }
    

</style>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><img class="image" src="<?php echo base_url(); ?>logo.jpg" width="60px" style="padding:15px"><b><a>PETCARE GROUPS</a></b></li>              
            </ul>
            <div class="navbar_menu">
                <ul class="menu">
                    <li><a href="<?= base_url('home'); ?>" class="btn btn-xs btn-primary text-uppercase"><font color="white">Home</font></a></li>
                    <li><a href="<?= site_url('editprofile') ?>" class="btn btn-xs btn-primary text-uppercase">Edit Profile</a></li>
                    <li><a class="btn btn-xs btn-danger text-uppercase" href="<?= base_url()?>home/logout">logout</a></center></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="status">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<body>
</body>
</html>
