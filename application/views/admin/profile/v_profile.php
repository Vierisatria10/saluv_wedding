<div class="container">
    <div class="page-header d-print-none">
        <h1 class="page-title">
            Data Profile
        </h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header shadow text-white" style="background-color: #915F6D!important;">
                    <div class="d-flex justify-content-center">
                       <i class="fa fa-user mx-1"> Detail Profile</i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $this->session->userdata('nama') ?></p>
                            <p>Username : <?= $this->session->userdata('username') ?></p>
                            <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $this->session->userdata('email') ?></p>
                            <?php if($this->session->userdata('level') === '1') : ?>
                                <p class="badge bg-success">Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Admin</p>
                            <?php elseif($this->session->userdata('level') === '2') : ?>
                                <p class="badge bg-info">Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : User</p>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= base_url('uploads/user/'.$this->session->userdata('foto')) ?>" class="img-fluid" width="100" alt="">
                        </div>
                    </div>
                        <hr>
                        <div class="ms-auto d-flex justify-content-end">
                            <a href="<?= base_url('profile/ganti_password') ?>" class="btn btn-md mx-2 btn-danger"><i class="fa fa-lock mx-1"></i> Ganti Password</a>
                            <a href="<?= base_url('dashboard/user') ?>" class="btn btn-md btn-dark">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>