  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>

    <section class="content">
      <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Student Code</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Umur</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">No. Telp</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Action</th>
            </tr>
            
            <?php $no=1; foreach($siswa as $s) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $s->kode_murid ?></td>
                <td class="text-center"><?php echo $s->nama ?></td>
                <td class="text-center"><?php echo $s->tgl_lahir ?></td>
                <td class="text-center"><?php echo $s->umur ?></td>
                <td class="text-center"><?php echo $s->jenis_kelamin ?></td>
                <td class="text-center"><?php echo $s->alamat ?></td>
                <td class="text-center"><?php echo $s->no_telp ?></td>
                <td class="text-center"><img src="<?php echo base_url().'assets/assets_admlte/dist/img/'.$s->photo ?>" width="75px"></td>       
                <td>
                <center>
                    <a class="btn btn-sm bg-teal" href ="<?php echo base_url('admin/dataSiswa/updateData/' .$s->id_user) ?>"><i class="fa fa-pencil-square-o"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm bg-maroon" href ="<?php echo base_url('admin/dataSiswa/deleteData/' .$s->id_user) ?>"><i class="fa fa-trash"></i></a>
                </center>
                </td>
              </tr>
            <?php endforeach ?>
      </table>
    </section>
    
  </div>
 


