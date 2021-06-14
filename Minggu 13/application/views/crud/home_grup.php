<?php
$getGrup = $this->session->userdata('session_grup');
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Grup</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Grup</th>
                       <th>Aksi</th>
                   </tr>
               </thead>
               <tbody>
                   <?php $no = 1; foreach($grup as $baris){ ?>
                   <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $baris->grup; ?></td>
                       <td>
                        <?php 
                        if ($getGrup == 1) {
                            echo '<a href="'.base_url('Grup/edit/'.$baris->id_grup).'" class="fa fa-edit">';
                            echo " ";
                            echo '<a href="'.base_url('Grup/hapus/'.$baris->id_grup).'" class="fa fa-times">';
                        }
                        ?>
                       </td>
                   </tr>
                   <?php } ?>
               </tbody>
           </table>
       </div>
       <a href="<?= base_url('Grup/tambah');?>" class="btn btn-success btn-icon-split">
           <span class="text">Tambah Data</span>
       </a>
    </div>
</div>