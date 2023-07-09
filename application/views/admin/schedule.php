  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>

    <section class="content">
        <p><a class="btn btn-sm bg-orange" href ="<?php echo base_url('admin/schedule/tambahData') ?>"><i class="fa fa-plus"></i> Tambah Data</a></p>
        <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Teacher Code</th>
                <th class="text-center">Student Code</th>
                <th class="text-center">CODE</th>
                <th class="text-center">Hari</th>
                <th class="text-center">Jam Awal</th>
                <th class="text-center">Jam Akhir</th>
                <th class="text-center">Action</th>
            </tr>
            <?php $no=1; foreach($ajar as $a) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $a->kode_guru ?></td>
                <td class="text-center"><?php echo $a->kode_murid ?></td>
                <td class="text-center"><?php echo $a->id_ajar ?></td>
                <td class="text-center"><?php echo $a->hari ?></td> 
                <td class="text-center"><?php echo $a->jam_awal ?></td> 
                <td class="text-center"><?php echo $a->jam_akhir ?></td> 
                <td>
                <center>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm bg-maroon" href ="<?php echo base_url('admin/schedule/deleteData/' .$a->id_ajar) ?>"><i class="fa fa-trash"></i></a>
                </center>
                </td>
              </tr>
            <?php endforeach ?>
        </table>
    </section>
    
  </div>
 