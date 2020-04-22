<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <?php
        $data = $this->m_account->get_profile($this->session->userdata('username'));
    ?>
</head>
<style>
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
        <div class="panel-heading">FORM CHANGE PASSWORD</div>
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
                <form method="post" action="<?php echo base_url('changepassword/change'); ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password Lama</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Password Lama Anda" name="passlama" required>
                        </div>    
                    <div class="form-group">
                        <label for="formGroupExampleInput">Password Baru</label>
                        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Password Baru Anda" name="passbaru" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Verifikasi Password Baru</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ulangi Masukkan Password Baru Anda" name="vpassbaru"required>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-secondary btn-right" href="<?= base_url()?>home">Batal</a>
                        <input type="submit" class="btn btn-primary" value="Submit" placeholder="Change Password">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>