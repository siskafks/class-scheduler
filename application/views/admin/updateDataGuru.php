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
                <?php foreach ($guru as $g): ?>
                    <form method="POST" action="<?php echo base_url('admin/dataGuru/updateDataAksi')?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Teacher Code</label>
                            <input type="hidden" name="id_guru" class="form-control" value="<?php echo $g->id_guru ?>">
                            <input type="number" name="kode_guru" class="form-control" value="<?php echo $g->kode_guru ?>">
                            <?php echo form_error('kode_guru','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $g->nama ?>">
                            <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $g->tgl_lahir ?>">
                            <?php echo form_error('tgl_lahir','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="number" name="umur" class="form-control" value="<?php echo $g->umur ?>">
                            <?php echo form_error('umur','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="jenis_kelamin" class="form-control">    
                                <option value="<?php echo $g->jenis_kelamin ?>"><?php echo $g->jenis_kelamin ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option> 
                            </select>
                            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $g->alamat ?>">
                            <?php echo form_error('alamat','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $g->no_telp ?>">
                            <?php echo form_error('no_telp','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $g->username ?>">
                            <?php echo form_error('username','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select name="hak_akses" class="form-control">    
                                <option value="<?php echo $g->hak_akses ?>">
                                <?php if($g->hak_akses == 1) { 
                                    echo "Admin";
                                }else if($g->hak_akses == 2) { 
                                    echo "Teacher";
                                }else{
                                } ?>
                                </option>
                                <option value="1">Admin</option>
                                <option value="2">Teacher</option> 
                            </select>
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