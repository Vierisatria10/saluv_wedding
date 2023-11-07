<!-- Modal -->
<div class="modal modal-blur fade" id="add_cerita" tabindex="-1" role="dialog" aria-labelledby="modal_add_kategori"data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Add Cerita</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCerita" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" onchange="readFile(this)" name="foto" id="foto">
                    <small class="text-danger">*File Upload hanya diperbolehkan jpg, jpeg, png</small>
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