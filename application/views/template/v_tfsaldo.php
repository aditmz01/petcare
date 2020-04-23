<?php
    $data = $this->m_account->get_profile($_SESSION['username']);
?>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<style>
    .content{
        padding : 30px;
        
    }
    .panel-default{
        height : 300px;
        width : 800px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        border : 2px solid black;
        border-radius: 10px;
    }
    .panel-heading{
        background-color: #000;
        color : white;
        text-align: center;
        padding : 10px;
        font-weight: bolder;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .panel-body{
        padding : 20px;
        color : black;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .dropdown {
        color: white;
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #FFF;
        min-width: 160px;
        box-shadow: 0px 4px 8px 0px rgba(34, 49, 63, 1);
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-weight: bolder;
    }

    .dropdown-content a:hover {
        background-color: #000;
        color : white;
        font-weight: bolder;
    }

    .dropdown:hover .dropdown-content {display: block;}
</style>
<body>
    <div class="content">
        <?php if ($data['level'] == 'Admin'){ ?>             
        <a class="btn btn-primary" href="<?= base_url('home/obat')?>"><font color="white"><b>OBAT</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/makanan')?>"><font color="white"><b>MAKANAN</b></font-color></a>
        <a class="btn btn-primary" href="#"><font color="white"><b>HISTORY TRANSAKSI</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/transfersaldo')?>"><font color="white"><b>TRANSER SALDO</b></font-color></a>
        <?php } else if ($data['level'] == 'Member'){ ?>
            <div class="dropdown">
            <a class="btn btn-primary" id ="dropbtn"><font color="white"><b>ORDER</b></font-color></a>
            <div class="dropdown-content">
                <a href="#">Obat Hewan</a>
                <a href="#">Makanan Hewan</a>
            </div>
        </div>
        <a class="btn btn-primary" id="tfsaldo" href="<?= base_url('home/tfsaldo')?>"><font color="white"><b>TRANSER SALDO</b></font-color></a>
        <a class="btn btn-primary" href="#"><font color="white"><b>HISTORY TRANSAKSI</b></font-color></a>
        <?php } ?>
        <div class="panel panel-default">
            <div class="panel-heading">TRANSFER SALDO | PETCARE GROUPS</div>
                <div class="panel-body">
                <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
                <?php } ?>
                <?php if(isset($success)) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $success ?>
                            </div>
                <?php } ?>
                <form method="post" action="<?php echo base_url('home/transfersaldo'); ?>">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Transfer Saldo Ke" name="tujuan" required >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jumlah</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Transfer" name="jumlah"required>
                        </div>      
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-right" value="Transfer" placeholder="Simpan">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>