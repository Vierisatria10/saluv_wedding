<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Amplop
        </h1>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-plus"> Tambah Amplop</i>
                </div>
                <div class="card-body">
                
                    <form action="<?= base_url('amplop/tambah') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">No Rekening / Hp</label>
                            <input type="text" class="form-control" name="no_hp_rek" id="no_hp_rek">
                            <?= form_error('no_hp_rek', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <?= form_error('nama', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                            <?= form_error('foto', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        
                        <br>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn text-white btn-md" style="background-color: #915F6D!important;"><i class="fa fa-save mx-1"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-envelope"> Amplop Undangan</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_amplop" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No Rekening / Hp</td>
                                    <td class="text-center">Nama</td>
                                    <td class="text-center">Foto</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($get_amplop as $row) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?= $row->no_hp_rek; ?></td>
                                        <td><?= $row->nama; ?></td>
                                        <td>
                                            <a href="<?= base_url('uploads/amplop/'.$row->foto) ?>" target="_blank">
                                                <img src="<?= base_url('uploads/amplop/'.$row->foto) ?>" alt="icon" width="100">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center items-align-center">
                                                <a href="<?= base_url('amplop/edit/') . $row->id_amplop; ?>" class="btn btn-warning me-2"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void()" class="btn btn-danger hapus-amplop" data-id="<?= $row->id_amplop; ?>"><i class="fa fa-trash"></i></a>
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
        $('#tbl_amplop').DataTable({
            responsive: true
        });
    });
</script>