<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Pengguna
        </h1>
    </div>
    
    <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add_user" class="btn btn-md text-white" style="background-color: #915F6D!important;"><i class="fa fa-plus"> Tambah User</i></a>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-users"> Pengguna</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_user" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Nama</td>
                                    <td class="text-center">Email</td>
                                    <td class="text-center">Username</td>
                                    <td class="text-center">Level</td>
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
</div>
<br>
<!-- Modal Add -->
<?php $this->load->view('admin/pengaturan/v_add_modal_user.php') ?>
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
    var tabel_user
    $(document).ready(function() {
        
        tabel_user = $('#tbl_user').DataTable({
            "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "destroy": true,
                "ajax": {
                    "url": "<?= base_url('Pengaturan/get_data_user') ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    "targets": [ 0 ],
                    "orderable": false,
                }, ],
        });

        $('#btn_simpan').click(function() {
            if ($('#nama').val() == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    type: 'error',
                    text: 'Nama Tidak Boleh Kosong!',
                });  
            }else if($('#username').val() == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    type: 'error',
                    text: 'Username Tidak Boleh Kosong!',
                });  
            }else if($('#email').val() == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    type: 'error',
                    text: 'Email Tidak Boleh Kosong!',
                });  
            }else if($('#password').val() == ''){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    type: 'error',
                    text: 'Password Tidak Boleh Kosong!',
                });  
            }else{
                simpan_user();
            }
        });
    });

    function simpan_user()
    {
        var url = '<?= base_url("Pengaturan/simpan_user") ?>';
        var formData = new FormData($('#formUser')[0]);

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
                $('#add_user').modal('hide');
                window.location = '<?= base_url("pengaturan/user") ?>';
            },
            error: function(response) {

            }
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