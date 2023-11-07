<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Ganti Password
        </h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header shadow text-white" style="background-color: #915F6D!important;">
                    <div class="d-flex justify-content-center">
                       <i class="fa fa-lock mx-1"> Ganti Password</i>
                    </div>
                </div>
                <div class="card-body">
                        <form action="<?= base_url('ganti_password') ?>" method="post">
                            <div class="form-group">
                                <p>Password Lama</p>
                                <input type="password" name="password_lama" id="password_lama" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Password Baru</p>
                                <input type="password" name="password_baru" id="password_baru" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Ulangi Password</p>
                                <input type="password" name="konfirmasi_password" id="konfirmasi_password" onkeyup="confirm()" class="form-control">
                            </div>
                            <small id="confirmmessage" class="text-danger"></small>
                            <hr>
                            <div class="ms-auto d-flex justify-content-end">
                                <button type="submit" id="btnreset" class="btn btn-md mx-2 btn-primary"><i class="fa fa-save mx-1"></i> Ubah Password</button>
                                <a href="https://mykmi.site/profile" class="btn btn-md btn-dark">Kembali</a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>