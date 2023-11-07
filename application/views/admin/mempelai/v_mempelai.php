<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Mempelai
        </h1>
    </div>

    <a href="<?= base_url('mempelai/tambah') ?>" class="btn btn-md text-white" style="background-color: #915F6D!important;"><i class="fa fa-plus"> Tambah Mempelai</i></a>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-heart"> Mempelai</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_mempelai" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Nama Mempelai</td>
                                    <td class="text-center">Keterangan</td>
                                    <td class="text-center">Nama Ayah</td>
                                    <td class="text-center">Nama Ibu</td>
                                    <td class="text-center">Foto</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($get_mempelai as $key => $value) :
                                ?>
                                    <tr id="<?= $value->id_mempelai; ?>">
                                        <td class="text-center"><?= $key + 1; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->ket; ?></td>
                                        <td><?= $value->ayah; ?></td>
                                        <td><?= $value->ibu; ?></td>
                                        <td>
                                            <a href="<?= base_url('uploads/mempelai/'. $value->image) ?>" target="_blank">
                                                <img src="<?= base_url('uploads/mempelai/'. $value->image) ?>" width="100" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center items-align-center">
                                                <a href="<?= base_url('mempelai/edit/') . $value->id_mempelai; ?>" class="btn btn-warning me-2"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void()" class="btn btn-danger hapus-mempelai" data-id="<?= $value->id_mempelai; ?>"><i class="fa fa-trash"></i></a>
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
        $('#tbl_mempelai').DataTable({
            responsive: true
        });
    });
</script>