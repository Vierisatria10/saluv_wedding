<!-- Modal -->
<div class="modal modal-blur fade" id="modal_edit_galeri" tabindex="-1" role="dialog" aria-labelledby="modal_add_kategori"data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Galeri</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditGaleri" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="id_galeri" name="id_galeri"/> 
        <!-- <input type="hidden" class="form-control" id="gambar_old" name="gambar_old"> -->
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group row" id="photo">
                        <div class="col-lg-3">
                            <h5 style="font-size: 14px; margin-top: 3px;">Foto</h5>
                        </div>
                        <div class="col-lg-9">
                            (No photo)
                            <span class="help-block"></span>
                        </div>
                    </div>
              
                </div>
                
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" id="label-photo">Foto</label>
                        <input type="file" name="edit_foto" id="edit_foto" onchange="readFile(this)" class="form-control">
                        <span id="error_gambar" class="text-danger"></span>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn text-white" style="background-color: #915F6D!important;" id="btn_update"><i class="fa fa-save mx-2"></i> Update</button>
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