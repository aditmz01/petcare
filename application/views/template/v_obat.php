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
    }
</style>
<body>
    <div class="content">
        <a class="btn btn-primary" href="<?= base_url('home/obat')?>"><font color="white"><b>OBAT</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/makanan')?>"><font color="white"><b>MAKANAN</b></font-color></a>
        <a class="btn btn-primary" href="#"><font color="white"><b>HISTORY TRANSAKSI</b></font-color></a>
        <a class="btn btn-primary" href="<?= base_url('home/tfsaldo')?>"><font color="white"><b>TRANSER SALDO</b></font-color></a>
        
        <div class="panel panel-default">
            <div class="panel-heading">DATA OBAT | PETCARE GROUPS</div>
                <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahobat">TAMBAH OBAT</button>
                    <br><br>
                    <table class="table table-bordered" border="1px" id="table"> 
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th width="400px">Deskripsi Obat</th>
                                <th>Stok Obat</th>
                                <th>Harga</th>
                                <th>Obat Untuk</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($data as $d) { ?>
                                <tr>
                                <form action="">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d->nama_obat ?></td>
                                    <td><?php echo $d->deskripsi?></td>
                                    <td><?php echo $d->stok_obat ?></td>
                                    <td><?php echo $d->harga?></td>
                                    <td><?php echo $d->untuk ?></td>
                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id_obat ?>"><i class="fas fa-user-edit"></i></button></td>
                                    <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('home/deleteObat/').$d->id_obat; ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
                                </form>
                                </tr>                        
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tambahobat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <center><h2><font color="black">TAMBAH DATA OBAT</font></h2></center>
                    </div>
                <div class="modal-body">
                    <!-- isi form ini -->
                    <form method="POST" action="<?php echo base_url('home/tambahobat'); ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput"><font color="black">Nama Obat</font></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Obat" name="nama_obat" required >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"><font color="black">Deskripsi Obat</font></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi Obat" name="deskripsi"required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"><font color="black">Stok Obat</font></label>
                            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Stok Obat" name="stok_obat" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"><font color="black">Harga</font></label>
                            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Harga Obat" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"><font color="black">Obat Untuk</font></label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Obat Untuk" name="untuk" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $no=1; foreach ($data as $d ) {?>
    <div class="modal fade" id="edit<?php echo $d->id_obat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <center><h2><font color="black">EDIT DATA OBAT <?php echo $d->nama_obat ?> </font></h2></center>
            </div>
            <div class="modal-body">
            <!-- isi form ini -->
            <form method="post" action="<?php echo base_url('home/editobat') ?>">
            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_obat" name="id_obat" value="<?php echo $d->id_obat ?>"  required>
            <div class="form-group">
            <label for="formGroupExampleInput"><font color="black">Nama Obat</font></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Obat" name="nama_obat" value="<?php echo $d->nama_obat ?>" required >
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput"><font color="black">Deskripsi</font></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="deskripsi" value="<?php echo $d->deskripsi ?>"required>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2"><font color="black">Stok Obat</font></label>
            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Stok Obat" name="stok_obat" value="<?php echo $d->stok_obat ?>" required>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2"><font color="black">Harga Obat</font></label>
            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Harga Obat" name="harga" value="<?php echo $d->harga ?>" required>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2"><font color="black">Obat Untuk</font></label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Obat Untuk" name="untuk" value="<?php echo $d->untuk ?>" required>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
            </div>
            </form>
        </div>
        </div>
    </div>
    <?php } ?>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable();
    });
</script>
  </script>