<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<style>
    body{

    } 
    .content{
        padding : 30px;

    }
    #tfsaldo{
        display: inline-block
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
    .panel-result{
        width : 800px;
        margin-top : 30px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
    }
    .panel-heading {
        border-bottom : 3px solid black;
        color : black;
        font-weight: bolder;
        font-size: 20px;
        padding : 10px;
    }
    .table{
        margin-top : 10px;
    }
    .table{
        text-align: center;
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
        <a class="btn btn-primary" href="<?= base_url('History')?>"><font color="white"><b>HISTORY TRANSAKSI</b></font-color></a>
        
        <div class="panel-result">
            <div class="panel-heading"><i class="fas fa-history"></i> | HISTORY TRANSAKSI</div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>NO</th>
                                <th>PRODUCT YANG DIBELI</th>
                                <th>JENIS</th>
                                <th>JUMLAH</th>
                                <th>TOTAL TRANSAKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($data as $d) {?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['product'] ?></td>
                                <td><?php echo $d['jenis'] ?></td>
                                <td><?php echo $d['jumlah']?></td>
                                <td><?php echo $d['total_transaksi'] ?></td>
                            </tr>
                        </tbody>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>