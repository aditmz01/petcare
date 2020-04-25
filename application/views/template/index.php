<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <?php 
        $data = $this->m_account->get_profile($_SESSION['username'])
    ?>
</head>
<style>
    body{

    } 
    .content{
        padding : 30px;

    }
    .infoakun{
        margin-top: 20px;
        margin-left : auto;
        margin-right : auto;
        height : 400px;
        width : 400px;
        border : 10px black;
        /* box-shadow: 1px 2px 1px 2px; */
    }
    .infoakun-heading{
        background-color: #000;
        text-align: center;
        color : white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bolder;
        padding : 10px;
    }
    .infoakun-body{
        padding : 30px;
        color : black; 
        background-color: #FFF;        
    }
    .infoakun-body table{
        margin-left : auto;
        margin-right : auto;
    }
    .infoakun-body a{
        margin-top : 10px;
        margin-left : auto;
        margin-right : auto;
    }
    #datadiri{
        background-color : #FFF;
    }
    
    tr td{
        padding: 10px;
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
        <div class="infoakun">
            <div class="infoakun-heading">
                Selamat Datang di PETCARE | GROUPS
            </div>
            <div class="infoakun-body">
                <table border="2" id="datadiri">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $data['nama']?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?php echo $data['username']?></td>
                    </tr>
                    <tr>
                        <td>NO HP</td>
                        <td>:</td>
                        <td><?php echo $data['nohp']?></td>
                    </tr>
                    <tr>
                        <td>Saldo</td>
                        <td>:</td>
                        <td><?php echo $data['saldo']?></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td><?php echo $data['level']?></td>
                    </tr>
                </table>
                    <a class="btn btn-primary" href="<?=base_url('changepassword')?>">Change Password</a>
            </div>
        </div>
        
    </div>

<script>
 $(document).ready(function(){
  $("btnOrder").click(function(){
    $("#obat").fadeIn("slow");
    $("#makanan").fadeIn("slow");
  });
});
</script>
</body>