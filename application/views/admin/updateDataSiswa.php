  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>

    <section class="content">
    <div class="box box-info" style="width:60%">
        <div class="box-header">
            <div class="card">
                <div class="card-body">
                <?php foreach ($siswa as $s): ?>
                    <form method="POST" action="<?php echo base_url('admin/dataSiswa/updateDataAksi')?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Student Code</label>
                            <input type="hidden" name="id_user" class="form-control" value="<?php echo $s->id_user ?>">
                            <input type="number" name="kode_murid" class="form-control" value="<?php echo $s->kode_murid ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $s->nama ?>">
                            <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $s->tgl_lahir ?>">
                            <?php echo form_error('tgl_lahir','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="number" name="umur" class="form-control" value="<?php echo $s->umur ?>">
                            <?php echo form_error('umur','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="jenis_kelamin" class="form-control">    
                                <option value="<?php echo $s->jenis_kelamin ?>"><?php echo $s->jenis_kelamin ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option> 
                            </select>
                            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $s->alamat ?>">
                            <?php echo form_error('alamat','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $s->no_telp ?>">
                            <?php echo form_error('no_telp','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $s->username ?>">
                            <?php echo form_error('username','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>