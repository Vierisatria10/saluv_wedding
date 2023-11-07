<!-- Modal -->
<div class="modal modal-blur fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="modal_add_kategori"data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUser" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="">--Pilih Level--</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" onchange="readFile(this)" name="foto_user" id="foto_user">
                </div>
            </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn text-white" id="btn_simpan" style="background-color: #915F6D!important;"><i class="fa fa-save mx-2"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

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