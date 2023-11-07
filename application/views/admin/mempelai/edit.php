<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Edit Mempelai
        </h1>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-heart"> Edit Mempelai</i>
                </div>
                <div class="card-body">
                <?php foreach ($edit_mempelai as $edit) : ?>
                    <form action="<?= base_url('mempelai/update') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Mempelai</label>
                            <input type="hidden" class="form-control" id="id_mempelai" name="id_mempelai" value="<?= $edit->id_mempelai; ?>">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $edit->nama; ?>">
                            <?= form_error('nama', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?= $edit->ket; ?>">
                            <?= form_error('keterangan', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="ayah" id="ayah" value="<?= $edit->ayah; ?>">
                            <?= form_error('ayah', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="ibu" id="ibu" value="<?= $edit->ibu; ?>">
                            <?= form_error('ibu', '<div class="err text-danger">', '</div>'); ?>
                        </div><br>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <img src="<?= base_url('uploads/mempelai/'.$edit->image) ?>" alt="" width="100">
                            <input type="checkbox" name="remove_photo" value="<?= base_url('uploads/mempelai/'.$edit->image) ?>"> Remove Photo when Saving
                        </div><br>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="image" id="image">
                            <?= form_error('image', '<div class="err text-danger">', '</div>'); ?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn text-white btn-md" style="background-color: #915F6D!important;"><i class="fa fa-save mx-1"></i> Update</button>
                            <a href="<?= base_url('mempelai') ?>" class="btn btn-danger btn-md mx-2"><i class="fa fa-backward mx-1"></i> Kembali</a>
                        </div>
                    </form>
                <?php endforeach; ?>
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

<?php if ($this->session->flashdata('warning')) : ?>
    <script>
        Swal.fire({
            title: "Gagal!",
            text: "<?= $this->session->flashdata('warning') ?>",
            icon: "warning",
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
