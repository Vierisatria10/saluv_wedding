<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Cerita Cinta
        </h1>
    </div>
    <form action="<?= base_url('Galeri/delete_semua') ?>" method="POST" class="formhapus">
    
    <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add_cerita" class="btn btn-md text-white" style="background-color: #915F6D!important;"><i class="fa fa-plus"> Tambah Cerita</i></a>
    <button type="submit" id="hapus_semua" class="btn btn-danger btn-md">
        <i class="fa fa-trash mx-2"></i> Hapus Semua
    </button>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-list"> Cerita Cinta</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_cerita" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Judul</td>
                                    <td class="text-center">Tanggal</td>
                                    <td class="text-center">Keterangan</td>
                                    <td class="text-center">Foto</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                           
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </form>
</div>
<br>
<!-- Modal Add -->
<?php $this->load->view('admin/cerita/v_add_modal.php') ?>
<!-- Modal edit -->
<?php $this->load->view('admin/cerita/v_edit_modal.php') ?>
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
    var tabel_cerita
    $(document).ready(function() {
        
        tabel_cerita = $('#tbl_cerita').DataTable({
            "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "destroy": true,
                "ajax": {
                    "url": "<?= base_url('Cerita/get_data_cerita') ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    "targets": [ 0 ],
                    "orderable": false,
                }, ],
        });

        $('#btn_simpan').click(function() {
            if ($('#judul').val() == '') {
                Swal.fire({
                    icon: 'warning',
                    type: 'warning',
                    title: 'Perhatian!',
                    text: 'Judul tidak boleh kosong, Wajib diisi!'
                });
            }else if($('#tanggal').val() == ''){
                Swal.fire({
                    icon: 'warning',
                    type: 'warning',
                    title: 'Perhatian!',
                    text: 'Tanggal tidak boleh kosong, Wajib diisi!'
                });
            }else if($('#keterangan').val() == ''){
                Swal.fire({
                    icon: 'warning',
                    type: 'warning',
                    title: 'Perhatian!',
                    text: 'Keterangan tidak boleh kosong, Wajib diisi!'
                });
            }else{
                simpan_cerita();
            }            
        });
    });

    function simpan_cerita() {
        var url = '<?= base_url("Cerita/simpan_cerita") ?>';
        var formData = new FormData($('#formCerita')[0]);

        $.ajax({
            url: url,
            type: 'Post',
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                Swal.fire({
                    icon: response.status,
                    type: response.status,
                    title: 'Berhasil!',
                    text: response.message
                });
                $('#add_cerita').modal('hide');
                window.location = '<?= base_url("cerita") ?>';
            },
            error: function(response) {

            }
        });
    }

    function edit_cerita(id_cerita)
        {
            var base_url = '<?= base_url('uploads/cerita/') ?>';

            $.ajax({
                url: "<?= base_url('Cerita/edit_cerita') ?>/" + id_cerita,
                type: "GET",
                dataType: "JSON",
                success: function(response) {
                    $('#id_cerita').val(response.edit_cerita.id_cerita);
                    $('#edit_judul').val(response.edit_cerita.judul);
                    $('#edit_tanggal').val(response.edit_cerita.tanggal);
                    $('#edit_keterangan').val(response.edit_cerita.keterangan);
                    $('#modal_edit_cerita').modal('show');

                    if(response.edit_cerita.foto)
                    {
                        // $('#label-photo').text('Foto 1'); // label photo upload
                        $('#label-photo').text('Change Photo'); 
                        $('#photo').html('<div style="margin-top: -15px;"><a href="'+ base_url + response.edit_cerita.foto +'" target="_blank"><img src="'+ base_url + response.edit_cerita.foto +'" class="img-fluid"></a></div>'); // show photo
                        $('#photo div').append('<input type="checkbox" name="remove_photo" value="'+ base_url + response.edit_cerita.foto+'"/> Remove photo when saving'); // remove photo
                    }
                    else
                    {
                        $('#label-photo').text('Upload Photo'); // label photo upload
                        $('#photo div').text('(No photo)');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    console.log('error :' + failed);
                    Swal.fire({
                        icon : "error",
                        title: "Gagal !",
                        text: "Gagal Get Data"
                    });
                }
            });
        }

        function delete_cerita(id_cerita)
        {
            Swal.fire({
                icon: 'warning',
                title: 'Apakah Anda Yakin Akan Menghapus Data ?',
                text: "Data Yang Dihapus Tidak Dapat Dikembalikan, Hapus?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batalkan',
                showLoaderOnConfirm: true,
                reverseButtons: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: '<?= base_url("Cerita/delete_cerita") ?>/'+id_cerita,
                            type: "get",
                            dataType: "json",
                            beforeSend: function() {
                                SwalLoading('Proses Menghapus Data, harap tunggu.');
                            },
                            success: function(response) {
                                Swal.close();
                                Swal.fire({
                                    icon: 'success',
                                    type: 'success',
                                    title: 'Berhasil!',
                                    text: 'Berhasil Menghapus Data Cerita',
                                    showConfirmButton: true,
                                });
                                // toastr['success']('Berhasil Menghapus Data Aplikasi');
                                window.location = '<?= base_url(); ?>cerita';
                            },
                            error: function(response) {
                                console.log('failed :' + response);
                                $('#loading').hide();
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Internal Server Error!',
                                    text: 'Silakan coba beberapa saat lagi / hubungi ITMAN.'
                                });
                            }
                        });
                    });
                },
                allowOutsideClick: false
            });
        }

        function readFile(input) {
            let files = input.files[0];

            if (files.type == "application/gif" | files.type == "image/png" | files.type == "image/jpg"| files.type == "image/jpeg") {
                //validasi ukuran file dalam byte, example 1 mega
                if( files.size > 10240000){
                    alert("ukuran file lebih besar dari 100 Mb")
                    // $('[name="edit_gambar"]').val('');
                    $('[name="foto"]').val('');
                    return false;
                }else{
                    /** retrive penampungan nama file upload */
                    // code executed
                }
            }else{
                //jika extensi file tidak sesuai, muncul warning   
                Swal.fire({
                    icon: 'warning',
                    title: 'Perhatian!',
                    type: 'warning',
                    text: 'Extension file upload tidak sesuai !',
                });
                // $('[name="edit_gambar"]').val('');
                $('[name="foto"]').val('');
                return false;
            }

        }
</script>