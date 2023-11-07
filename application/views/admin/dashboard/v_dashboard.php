<div class="container">
            <div class="page-header d-print-none">
                <div class="container">
                    <div class="row g-1 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                        Dashboard
                        </h2>
                    </div>
                    </div>
                </div>
            </div>
            
            <?php echo $this->session->flashdata('pesan');?>

            <div class="row row-cards">
              <div class="col-6 col-sm-3 col-lg-3">
                <div class="card shadow mb-4" style="border-radius: 10px;">
                  <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <div class="card-title">Tamu Hadir</div>
                  </div>
                  <div class="card-body p-3 text-center">
                    
                    <div class="h1 m-0"><?= $total_hadir; ?> Tamu</div>
                  </div>
                  <div class="card-footer text-center">
                    <a href="<?= base_url('ucapan') ?>">Lihat Selengkapnya <i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3 col-lg-3">
                <div class="card shadow mb-4" style="border-radius: 10px;">
                  <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <div class="card-title">Jadwal Acara</div>
                  </div>
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?= $total_jadwal; ?> Acara</div>
                  </div>
                  <div class="card-footer text-center">
                    <a href="<?= base_url('jadwal') ?>">Lihat Selengkapnya <i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3 col-lg-3">
                <div class="card shadow mb-4" style="border-radius: 10px;">
                  <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <div class="card-title">Mempelai</div>
                  </div>
                  <div class="card-body p-3 text-center">
                    <div class="h1 font-weight-bold m-0"><?= $total_mempelai; ?> Mempelai</div>
                    
                  </div>
                  <div class="card-footer text-center">
                    <a href="<?= base_url('mempelai') ?>">Lihat Selengkapnya <i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3 col-lg-3">
                <div class="card shadow mb-4" style="border-radius: 10px;">
                  <div class="card-header text-white" style="background-color: #915F6D!important;">
                    <div class="card-title">Galeri</div>
                  </div>
                  <div class="card-body p-3 text-center">
                    
                    <div class="h1 m-0"><?= $total_galeri; ?> Foto</div>
                  </div>
                  <div class="card-footer text-center">
                    <a href="<?= base_url('galeri') ?>">Lihat Selengkapnya <i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              
            </div>
           
           
          </div>