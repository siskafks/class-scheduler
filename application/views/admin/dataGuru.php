  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title ?></h1>
    </section>

    <section class="content">
    <p><a class="btn btn-sm bg-orange" href ="<?php echo base_url('admin/dataGuru/tambahData') ?>"><i class="fa fa-plus"></i> Tambah Data</a></p>
      <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Teacher Code</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Umur</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">No. Telp</th>
                <th class="text-center">Hak Akses</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Action</th>
            </tr>
            
            <?php $no=1; foreach($guru as $g) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $g->kode_guru ?></td>
                <td class="text-center"><?php echo $g->nama ?></td>
                <td class="text-center"><?php echo $g->tgl_lahir ?></td>
                <td class="text-center"><?php echo $g->umur ?></td>
                <td class="text-center"><?php echo $g->jenis_kelamin ?></td>
                <td class="text-center"><?php echo $g->alamat ?></td>
                <td class="text-center"><?php echo $g->no_telp ?></td>
                <td class="text-center">
                    <?php if($g->hak_akses == 1) { 
                        echo "Admin";
                    }else if($g->hak_akses == 2) { 
                        echo "Teacher";
                    }else{
                    } ?>
                </td>
                <td class="text-center"><img src="<?php echo base_url().'assets/assets_admlte/dist/img/'.$g->photo ?>" width="75px"></td>       
                <td>
                <center>
                    <a class="btn btn-sm bg-teal" href ="<?php echo base_url('admin/dataGuru/updateData/' .$g->id_guru) ?>"><i class="fa fa-pencil-square-o"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm bg-maroon" href ="<?php echo base_url('admin/dataGuru/deleteData/' .$g->id_guru) ?>"><i class="fa fa-trash"></i></a>
                </center>
                </td>
            </tr>
            <?php endforeach ?>
      </table>
    </section>
    
  </div>