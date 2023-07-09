<div class="content-wrapper">
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>
    <section class="content">
        <div class="box box-info">
             
                <?php foreach($pendaftar as $p) : ?>
                <div class="box-body">
                    <div class="col-xs-3">
                    <br>
                        <img style="width:75%" src="<?php echo base_url('/assets/assets_admlte/dist/img/'.$p->photo) ?>">
                    </div>
                    <div class="col-xs-5">
                    <table class="table">
                        <tr>
                            <td>Nama </td>
                            <td> : </td>
                            <td><?php echo $p->nama ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td> : </td>
                            <td><?php echo $p->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td> : </td>
                            <td><?php echo $p->umur ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td> : </td>
                            <td><?php echo $p->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?php echo $p->alamat ?></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td> : </td>
                            <td><?php echo $p->no_telp ?></td>
                        </tr>
                    </table>
                    <form method="POST" action="<?php echo base_url('admin/detailPendaftar/confirm')?>">
                        <input type="hidden" name="id_user" value="<?php echo $p->id_user ?>">
                        <input type="hidden" name="status_daftar" value="1">
                        <input type="hidden" name="hak_akses" value="3">
                        <input type="number" name="kode_murid" placeholder="student code">
                        
                        <button type="submit" name="confirm" class="btn btn-info pull-right">Confirm</button>
                    </form>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
    </section>
</div>
