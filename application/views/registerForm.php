<body class="hold-transition register-page">
<br>
<div class="row-center">
    <div class="col-md-6">
        <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Form Registrasi CV School</h3>
            </div>
            <div class="box-body">
            <form method="POST" action="<?php echo base_url('register')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" name="nama">
                    </div>
                    <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
                </div>
              
                <div class="form-group">
                    <label>Tanggal Lahir</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                    <?php echo form_error('tgl_lahir','<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Umur</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-child"></i>
                    </div>
                    <input type="number" class="form-control" name="umur">
                    </div>
                    <?php echo form_error('umur','<div class="text-small text-danger"></div>') ?>
                </div>
                
                <div class="form-group">
                    <label>Gender</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-mars"></i>
                    </div>
                        <select name="jenis_kelamin" class="form-control">    
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option> 
                        </select>
                    </div>
                    <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-road"></i>
                    </div>
                    <input type="text" class="form-control" name="alamat">
                    </div>
                    <?php echo form_error('alamat','<div class="text-small text-danger"></div>') ?>
                </div>
             
                <div class="form-group">
                    <label>No. Telp</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" name="no_telp">
                    </div>
                    <?php echo form_error('no_telp','<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Username</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-at"></i>
                    </div>
                    <input type="text" class="form-control" name="username">
                    </div>
                    <?php echo form_error('username','<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <input type="password" class="form-control" name="password">
                    </div>
                    <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Photo</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-image"></i>
                    </div>
                    <input type="file" class="form-control" name="photo">
                    </div>
                </div>

                <div class="form-group">
                    <input type="hidden" name="status_daftar" class="form-control" value="0">
                </div>

                <button type="submit" class="btn btn-primary pull-right">Register</button>
            </form>
            </div>
        </div>
    </div>
</div>

</body>