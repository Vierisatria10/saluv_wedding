<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Galeri
        </h1>
    </div>
    <form action="<?= base_url('Galeri/delete_semua') ?>" method="POST" class="formhapus">
    
    <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add_galeri" class="btn btn-md text-white" style="background-color: #915F6D!important;"><i class="fa fa-plus"> Tambah Galeri</i></a>
    <button type="submit" id="hapus_semua" class="btn btn-danger btn-md">
        <i class="fa fa-trash mx-2"></i> Hapus Semua
    </button>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <i class="fa fa-image"> Galeri</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_galeri" style="width: 100%;" class="display table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center"><input type="checkbox" id="centangsemua"></td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Foto</td>
                                    <td class="text-center">Created Update</td>
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
<?php $this->load->view('admin/galeri/v_add_modal.php') ?>
<!-- Modal edit -->
<?php $this->load->view('admin/galeri/v_edit_modal.php') ?>
<!-- Modal Detail -->
<?php $this->load->view('admin/galeri/v_detail_modal.php') ?>

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
    var tabel_galeri
    $(document).ready(function() {
        
        tabel_galeri = $('#tbl_galeri').DataTable({
            "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "destroy": true,
                "ajax": {
                    "url": "<?= base_url('Galeri/get_data_galeri') ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    "targets": [ 0 ],
                    "orderable": false,
                }, ],
        });

        $('#centangsemua').click(function(e) {
            if ($(this).is(":checked")) {
                $('.centangGaleri').prop('checked', true);
            }else{
                $('.centangGaleri').prop('checked', false);
            }
        });

        $('#btn_simpan').on('click', function() {
            if($('#foto').val() == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    type: 'error',
                    text: 'Silahkan Pilih Gambar Terlebih Dahulu.',
                });  
            }else{
                var form_data = new FormData();
                var ins = document.getElementById('foto').files.length;
                for (var x = 0; x < ins; x++) {
                    form_data.append("files[]", document.getElementById('foto').files[x]);
                }
                $.ajax({
                    url:"<?php echo base_url(); ?>Galeri/insert",   
                    method:"POST",  
                    data:form_data,  
                    contentType: false,  
                    cache: false,  
                    processData:false,  
                    dataType: "json",
                    success:function(res)  
                    {  
                        console.log(res.success);
                        if(res.success == true){
                         $('#foto').val('');
                         Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            type: 'success',
                            text: res.msg
                         });
                         $('#add_galeri').modal('hide');   
                        }
                        else if(res.success == false){
                          $('#msg').html(res.msg); 
                        }
                    }  
                });
            }  
        });

        $('#btn_update').on('click', function(e) {
            e.preventDefault();
            var formDataUpdate = new FormData($('#formEditGaleri')[0]);
            console.log(formDataUpdate);
            
            $.ajax({
            url : "<?= base_url('Galeri/update_galeri') ?>",
            type : "POST",
            dataType : "json",
            data :formDataUpdate,
            cache:false,
            processData:false,
            contentType:false,
            beforeSend: function() {
                SwalLoading('Sedang Update data, harap tunggu.');
            },
            success : function(response) {
                console.log(response)
                    Swal.close();
                    Swal.fire({
                        icon: response.status,
                        type: response.status,
                        title: 'Berhasil!',
                        text: response.message,
                       
                    });
                    $('#modal_edit_galeri').modal('hide');
                    window.location = '<?= base_url(); ?>galeri';
            },
            error : function(response, xhr) {
                //    alert(base);
                Swal.close();
                console.log('failed :' + response);
                toastr["error"]("Gagal Import File, Periksa Kembali Koneksi Anda.");
            }
            });
        });
      
    });

        function edit_galeri(id_galeri)
        {
            var base_url = '<?= base_url('uploads/galeri/') ?>';

            $.ajax({
                url: "<?= base_url('Galeri/edit_galeri') ?>/" + id_galeri,
                type: "GET",
                dataType: "JSON",
                success: function(response) {
                    $('#id_galeri').val(response.edit_galeri.id_galeri);
                    
                    $('#modal_edit_galeri').modal('show');

                    if(response.edit_galeri.foto)
                    {
                        // $('#label-photo').text('Foto 1'); // label photo upload
                        $('#label-photo').text('Change Photo'); 
                        $('#photo').html('<div style="margin-top: -15px;"><a href="'+ base_url + response.edit_galeri.foto +'" target="_blank"><img src="'+ base_url + response.edit_galeri.foto +'" class="img-fluid"></a></div>'); // show photo
                        $('#photo div').append('<input type="checkbox" name="remove_photo" value="'+ base_url + response.edit_galeri.foto+'"/> Remove photo when saving'); // remove photo
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

        function detail_galeri(id_galeri)
        {
            var base_url = '<?= base_url('uploads/galeri/') ?>';
            $('#modal_detail_galeri').modal('show');

            $.ajax({
                url: "<?= base_url('Galeri/detail_galeri') ?>/" + id_galeri,
                type: "GET",
                dataType: "JSON",
                beforeSend: function() {
                    $('.modal_detail').html(`
                        <div class="text-center">
                            Memuat...
                        </div>
                    `)
                },
                success: function(response) {
                    var html = '';
                    html += `
                        <div class="row">
                            <input type="hidden" class="form-control" id="id_detail_galeri" name="id_galeri"/> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        : <a href="`+ base_url + response.detail_galeri.foto +`" target="_blank"><img src="`+ base_url + response.detail_galeri.foto +`" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    &nbsp;<p class="fw-bold">Dibuat Tanggal : `+ response.detail_galeri.created_update +`</p>
                                </div>
                            </div>
                        </div>
                    `;
                    $('#body-detail').html(html);
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

        function delete_galeri(id_galeri)
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
                            url: '<?= base_url("Galeri/delete_galeri") ?>/'+id_galeri,
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
                                    text: 'Berhasil Menghapus Data Galeri',
                                    showConfirmButton: true,
                                });
                                // toastr['success']('Berhasil Menghapus Data Aplikasi');
                                window.location = '<?= base_url(); ?>galeri';
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

    $('.formhapus').submit(function(e) {
                e.preventDefault();
                let jmldata = $('.centangGaleri:checked');
                
                if (jmldata.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Perhatian',
                        text: 'Maaf tidak ada yang bisa dihapus, silahkan dicentang !'
                    });
                }else{
                    Swal.fire({
                        title: 'Hapus Data',
                        text: `Ada ${jmldata.length} data Galeri yang akan dihapus, yakin ?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus !',
                        cancelButtonText: 'Tidak'
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                type: "post",
                                url: $(this).attr('action'),
                                data: $(this).serialize(),
                                dataType: "json",
                                success: function(response) {
                                    if (response.sukses) {
                                        Swal.fire({
                                            icon: 'success',
                                            type: 'success',
                                            title: 'Berhasil',
                                            text: response.sukses
                                        })
                                        window.location = '<?= base_url("galeri") ?>';
                                    }
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(xhr.status + "\n" + xhr.responseText + "\n" +
                                        thrownError);
                                }
                            });
                        }
                    });
                }
            });
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