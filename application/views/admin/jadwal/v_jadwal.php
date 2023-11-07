<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Jadwal
        </h1>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-plus"> Tambah Jadwal</i>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('jadwal/tambah') ?>" method="POST">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul">
                            <?= form_error('judul', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat">
                            <?= form_error('alamat', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Hari</label>
                            <input type="text" class="form-control" name="hari" id="hari">
                            <?= form_error('hari', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal">
                            <?= form_error('tanggal', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" name="jam" id="jam">
                            <?= form_error('jam', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Link Map</label>
                            <input type="text" class="form-control" name="link_maps" id="link_maps" placeholder="https://www.google-maps">
                            <?= form_error('link_maps', '<div class="err text-danger">', '</div>'); ?>
                        </div>
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
                    <i class="fa fa-calendar"> Jadwal Acara</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_jadwal" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Judul</td>
                                    <td class="text-center">Alamat</td>
                                    <td class="text-center">Hari</td>
                                    <td class="text-center">Tanggal</td>
                                    <td class="text-center">Jam</td>
                                    <td class="text-center">Link Maps</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($get_jadwal as $key => $value) :
                                ?>
                                    <tr id="<?= $value->id_jadwal; ?>">
                                        <td class="text-center"><?= $key + 1; ?></td>
                                        <td><?= $value->judul; ?></td>
                                        <td><?= $value->alamat; ?></td>
                                        <td><?= $value->hari; ?></td>
                                        <td><?= TanggalIndo($value->tanggal); ?></td>
                                        <td><?= $value->jam; ?></td>
                                        <td>
                                            <a href="<?= $value->link_maps; ?>" target="_blank" style="text-decoration: none;"><?= $value->link_maps; ?></a>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center items-align-center">
                                                <a href="<?= base_url('jadwal/edit/') . $value->id_jadwal; ?>" class="btn btn-warning me-2"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void()" class="btn btn-danger hapus-jadwal" data-id="<?= $value->id_jadwal; ?>"><i class="fa fa-trash"></i></a>
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