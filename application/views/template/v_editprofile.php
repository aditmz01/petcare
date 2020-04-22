<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <?php
        $data = $this->m_account->get_profile($this->session->userdata('username'));
    ?>
</head>
<style>
    body{

    } 
    .panel-default{
        margin-top : 30px;
        width: 700px;
        margin-left: auto;
        margin-right: auto;
        border : 1px grey;
        box-shadow: 1px 2px 1px 2px;
        border-radius : 10px;

    }
    .panel-default .panel-heading{
        padding : 10px;
        justify-content: center;
        background-color: black;
        color : white;
        font-weight: bolder;
        text-align: center;
    }
    .panel-body{
        padding:20px;
        height : auto;
    }
</style>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">FORM EDIT USER</div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url('editprofile/edit'); ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="username" name="username" value="<?php echo $data['username']?>" readonly>
                        </div>    
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" value="<?php echo $data['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">nohp</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Nomor HP" name="nohp" value="<?php echo $data['nohp']?>" required>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-secondary btn-right" href="<?= base_url()?>home">Batal</a>
                        <input type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>