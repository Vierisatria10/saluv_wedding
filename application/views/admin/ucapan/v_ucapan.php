<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Ucapan & Doa
        </h1>
    </div>

    <form action="<?= base_url('ucapan/export') ?>" method="POST">
        <div class="form-group">
            <label></label>
            <button id="export" type='submit' class="btn btn-md btn-success"><i class="fa fa-print mx-1"></i> Export Excel</button>
        </div>
    </form>		
    
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-hand-paper-o"> Ucapan & Doa</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_jadwal" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Nama</td>
                                    <td class="text-center">Kehadiran</td>
                                    <td class="text-center">Ucapan</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($get_ucapan as $key => $value) :
                                ?>
                                    <tr id="<?= $value->id_ucapan; ?>">
                                        <td class="text-center"><?= $key + 1; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td>
                                            <?php if ($value->status == 'Hadir') { 
                                                echo '<div class="badge bg-success">Hadir</div>';
                                            }else if($value->status == 'Belum Pasti') {
                                                echo '<div class="badge bg-info">Belum Pasti</div>';
                                            }else{
                                                echo '<div class="badge bg-danger">Tidak Hadir</div>';
                                            }
                                            ?>
                                        </td>  
                                        <td><?= $value->ucapan_doa; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center items-align-center">
                                                <a href="javascript:void()" class="btn btn-danger hapus-ucapan" data-id="<?= $value->id_ucapan; ?>"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Modal edit -->
<!-- Modal Delete -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('success')) : ?>
    <script>
        Swal.fire({
            title: "Congratulation",
            text: "<?= $this->session->flashdata('success') ?>",
            icon: "success",
            showConfirmButton: true,
            timer: 30000,
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('update')) : ?>
    <script>
        Swal.fire({
            title: "Update",
            text: "<?= $this->session->flashdata('update') ?>",
            icon: "success",
            showConfirmButton: true,
            timer: 1000,
        });
    </script>
<?php endif; ?>

<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tbl_jadwal').DataTable({
            responsive: true
        });
    });
</script>