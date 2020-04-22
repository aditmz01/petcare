<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<style>
    .content{
        padding : 30px;
        
    }
    .panel{
        height : 300px;
        width : 800px;
        margin-left: auto;
        margin-right: auto;
    }
    .panel-default{
        padding : 30px;
        border : 3px black;
        box-shadow: 1px 3px 7px 1px;
        /* width : 800px; */
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
    }
</style>
<body>
    <div class="content">
        <a class="btn btn-primary" href="<?= base_url('home/obat')?>"><font color="white"><b>OBAT</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/makanan')?>"><font color="white"><b>MAKANAN</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/transfersaldo')?>"><font color="white"><b>TRANSER SALDO</b></font-color></a>
        
        <div class="panel panel-default">
            <div class="panel-heading">TRANSFER SALDO | PETCARE GROUPS</div>
                <div class="panel-body">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Transfer Saldo Ke" name="username" required >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jumlah</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Transfer" name="jumlah"required>
                        </div>      
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-right" value="Transfer" placeholder="Simpan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>