  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>

    <section class="content">
        <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Student</h3>
                </div>
                <?php foreach($siswa as $s) : ?>
                <div class="box-body">
                    <div class="col-xs-3">
                        <img style="width:75%" src="<?php echo base_url('/assets/assets_admlte/dist/img/'.$s->photo) ?>">
                    </div>
                    <div class="col-xs-5">
                    <table class="table">
                        <tr>
                            <td>Student Code</td>
                            <td> : </td>
                            <td><?php echo $s->kode_murid ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><?php echo $s->nama ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td> : </td>
                            <td><?php echo $s->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td> : </td>
                            <td><?php echo $s->umur ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td> : </td>
                            <td><?php echo $s->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?php echo $s->alamat ?></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td> : </td>
                            <td><?php echo $s->no_telp ?></td>
                        </tr>
                    </table>
                    </div>

                </div>
                <?php endforeach; ?>
        </div>
    </section>
</div>
 


