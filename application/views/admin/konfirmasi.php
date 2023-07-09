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
                <th class="text-center">Nama</th>
                <th class="text-center">No. Telp</th>
                <th class="text-center">Registration Status</th>
                <th class="text-center">Action</th>
            </tr>
            
            <?php $no=1; foreach($confirm as $c) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $c->nama ?></td>
                <td class="text-center"><?php echo $c->no_telp ?></td>
                <td class="text-center">
                <?php
                    if($c->status_daftar == "0"){
                      echo "<span class='label label-danger'> not confirmed </span>";
                    }else{
                      echo "<span class='label label-info'> confirmed </span>";
                    }
                ?>
                </td>
                <td class="text-center">
                <?php if($c->status_daftar == "0"){ ?>
                    <a href="<?php echo base_url('admin/detailPendaftar/detail/').$c->id_user ?>" 
                    class="btn btn-sm bg-teal"><i class="fa fa-eye"></i></a>
                <?php }else{ ?>
                    <button type="button" class="btn btn-sm bg-teal disabled"><i class="fa fa-eye"></i></button>
                <?php } ?>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </section>
  </div>
 


