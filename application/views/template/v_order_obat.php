<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <?php 
        // $data = $this->m_account->get_profile($_SESSION['username'])
    ?>
</head>
<style>
    .content{
        padding : 30px;
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

    .row{
        width : 100%;
        padding : 20px;
    }
    .panel1{
        margin-top : 10px;
        border : 2px solid black;
        border-radius : 10px;
        width : 60%;
        float:left;

    }
    .panel1 .panel-heading{
        padding : 10px;
        justify-content: center;
        background-color: black;
        color : white;
        font-weight: bolder;
    }
    .panel-body{
        padding:20px;
        height : auto;
        color : black;
    }
    .resultbox{
        border : 2px solid black;
        margin-top : 10px;
        margin-left: 30px;
        float : right;
        border-radius : 10px;
        width : 35%;
    }
    .resultbox .heading{
        background-color : black;
        color : white;
        padding : 10px;
        font-weight: bolder;
    }
    .resultbox .bodyresult{
        padding : 20px;
    }
</style>
<body>
    <div class="content">
        <div class="dropdown">
            <a class="btn btn-primary" id ="dropbtn"><font color="white"><b>ORDER</b></font-color></a>
            <div class="dropdown-content">
                <a href="<?= base_url('order/obat')?>">Obat Hewan</a>
                <a href="<?= base_url('order/makanan')?>">Makanan Hewan</a>
            </div>
        </div>
        <a class="btn btn-primary" id="tfsaldo" href="<?= base_url('home/tfsaldo')?>"><font color="white"><b>TRANSER SALDO</b></font-color></a>
        <a class="btn btn-primary" href="#"><font color="white"><b>HISTORY TRANSAKSI</b></font-color></a>
    
        <div class="row">
            <div class="panel1">
                <div class="panel-heading"><i class="fas fa-shopping-cart"></i> | ORDER OBAT HEWAN</div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url('Order/orderMakanan'); ?>">
                        <div class="form-group row">
                            <label for="formGroupExampleInput2"class="col-sm-2 col-form-label">Product</label>
                            <div class="col-sm-10">
                                <select id="inputState" class="form-control">
                                    <option selected>PILIH PRODUCT</option>
                                    <option>OBAT 1</option>
                                    <option>OBAT 2</option>
                                    <option>OBAT 3</option>
                                    <option>OBAT 4</option>
                                    <option>OBAT 5</option>
                                </select>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="formGroupExampleInput2"class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Masukkan Jumlah Barang yang akan dibeli" name="jumlah" required>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="formGroupExampleInput2"class="col-sm-2 col-form-label">Total Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="total" value="Rp. " readonly>
                            </div>
                        </div> 
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-right" value="Submit">
                        </div>
                        </form>
                    </div>
                </div>
                <div class="resultbox">
                    <div class="heading"><i class="fas fa-poll"></i> | RESULT BOX</div>
                    <div class="bodyresult">
                        <textarea class="form-control" rows="13" ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>