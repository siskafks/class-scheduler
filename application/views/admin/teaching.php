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
                    <form method="POST" action="<?php echo base_url('admin/schedule/tambahDataAksi')?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>CODE</label>
                            <input type="number" name="id_ajar" class="form-control">
                            <?php echo form_error('id_ajar','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Teacher Code</label>
                            <select name="kode_guru" class="form-control">    
                                <option value="">--Teacher Code--</option>
                                <?php foreach($guru as $g) : ?>
                                <option value="<?php echo $g->kode_guru ?>"><?php echo $g->kode_guru ?></option>   
                                <?php endforeach; ?>    
                            </select>     
                            <?php echo form_error('kode_guru','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Student Code</label>
                            <select name="kode_murid" class="form-control">    
                                <option value="">--Student Code--</option>
                                <?php foreach($siswa as $s) : ?>
                                <option value="<?php echo $s->kode_murid ?>"><?php echo $s->kode_murid ?></option>   
                                <?php endforeach; ?>    
                            </select>     
                            <?php echo form_error('kode_murid','<div class="text-small text-danger"></div>') ?>
                        </div>  
                        <div class="form-group">
                            <label>Hari</label>
                            <select name="hari" class="form-control">    
                                <option value="">--Pilih Hari--</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            <?php echo form_error('hari','<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Jam Awal</label>
                            <input type="time" name="jam_awal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jam Akhir</label>
                            <input type="time" name="jam_akhir" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>