<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    
    <!-- Tostr CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('dist/assets/plugins/toaster/toastr.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Datatables -->
    <!-- <script src="<?= base_url('dist/assets/js/require.min.js') ?>"></script>     -->
    <!-- <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script> -->
    <!-- CSS Files -->
    <link href="<?= base_url('dist/assets/css/tabler.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/assets/css/tabler-flags.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/assets/css/tabler-payments.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/assets/css/tabler-vendors.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/assets/css/demo.min.css?1684106062') ?>" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
   
  </head>
  <body>
  <script src="<?= base_url('dist/assets/js/demo-theme.min.js?1684106062') ?>"></script>
    <div class="page">
    <header class="navbar navbar-expand-md d-print-none" >
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <img src="<?= base_url('assets/theme/assets/img/favicon.png') ?>" alt=""><a href="." style="font-size: 30px; font-weight: bold; color: #915F6D; font-family: 'Arizonia', sans-serif;" >
                Saluv Wedding
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
           
            <div class="d-none d-md-flex">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
              
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url('<?php echo base_url("uploads/user/".$this->session->userdata('foto')) ?>')"></span>
                <div class="d-none d-xl-block ps-2">
                  <div><?php echo $this->session->userdata('nama') ?></div>
                  <?php if($this->session->userdata('level') === '1') : ?>
                    <div class="mt-1 small text-success">
                        Admin
                    </div>
                  <?php elseif($this->session->userdata('level') === '2') : ?>
                    <div class="mt-1 small text-muted">
                        User
                    </div>
                   <?php endif; ?>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="<?= base_url('profile') ?>" class="dropdown-item"><i class="fa fa-edit mx-1"></i> Profile</a>
                <a href="#" id="logout" class="dropdown-item"><i class="fa fa-sign-out mx-1"></i> Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
                <?php if($this->session->userdata('level') === '1') : ?>
                <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('dashboard') ?>" >
                    <i class="fa fa-home mx-1" style="color: #915F6D;"></i>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                
                <li class="nav-item <?= $this->uri->segment(1) == 'mempelai' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('mempelai') ?>" >
                    <i class="fa fa-heart mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Mempelai
                    </span>
                  </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'jadwal' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('jadwal') ?>" >
                    <i class="fa fa-calendar mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Jadwal Acara
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'galeri' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('galeri') ?>" >
                    <i class="fa fa-image mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Galeri
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'ucapan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('ucapan') ?>" >
                    <i class="fa fa-hand-paper-o mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Ucapan & Doa
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'amplop' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('amplop') ?>" >
                    <i class="fa fa-envelope mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Amplop Digital
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'cerita' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('cerita') ?>" >
                    <i class="fa fa-list mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Cerita Cinta
                    </span>
                  </a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <i class="fa fa-cogs mx-1" style="color: #915F6D;"></i>
                    <span class="nav-link-title">
                        Pengaturan
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a href="<?= base_url('pengaturan/backup_db') ?>" class="dropdown-item "><i class="fa fa-database mx-2"></i> Backup Database</a>
                        <a href="<?= base_url('pengaturan/user') ?>" class="dropdown-item "><i class="fa fa-users mx-2"></i> Pengguna</a>
                        <a href="<?= base_url('pengaturan/web') ?>" class="dropdown-item "><i class="fa fa-globe mx-2"></i> Website</a>
                      </div>
                      
                    </div>
                  </div>
                </li>
                <!-- User -->
                <?php elseif($this->session->userdata('level') === '2') : ?>
                  <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('dashboard') ?>" >
                    <i class="fa fa-home mx-1" style="color: #915F6D;"></i>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                
                <li class="nav-item <?= $this->uri->segment(1) == 'mempelai' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('mempelai') ?>" >
                    <i class="fa fa-heart mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Mempelai
                    </span>
                  </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'jadwal' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('jadwal') ?>" >
                    <i class="fa fa-calendar mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Jadwal Acara
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'galeri' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('galeri') ?>" >
                    <i class="fa fa-image mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Galeri
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'ucapan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('ucapan') ?>" >
                    <i class="fa fa-hand-paper-o mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Ucapan & Doa
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'amplop' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('amplop') ?>" >
                    <i class="fa fa-envelope mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Amplop Digital
                    </span>
                  </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(1) == 'cerita' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= base_url('cerita') ?>" >
                    <i class="fa fa-list mx-1" style="color: #915F6D;"></i> 
                    <span class="nav-link-title">
                      Cerita Cinta
                    </span>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
              
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <?= $contents; ?>
      </div>
      <!-- <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" style="font-size: 28px; font-weight: bold; color: #00c2cc;" href="./index.html">
                Saluv Resto
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                
                
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(<?= base_url('dist/demo/faces/female/25.jpg)') ?>"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown"><i class="fe fe-box"></i> Data Master</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a href="<?= base_url('menu') ?>" class="dropdown-item "><i class="fa fa-cube pr-1"></i> Menu</a>
                                <a href="<?= base_url('kategori') ?>" class="dropdown-item "><i class="fa fa-tags pr-1"></i> Kategori</a>
                                <a href="./pricing-cards.html" class="dropdown-item "><i class="fa fa-users pr-1"></i> Customer</a>
                                <a href="./pricing-cards.html" class="dropdown-item "><i class="fa fa-user pr-1"></i> Pengguna</a>
                            </div>
                        </div>
                    </div>
                  </li>
                 
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown"><i class="fe fe-calendar"></i> Stok</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" class="dropdown-item ">Entry Stok</a>
                      <a href="./icons.html" class="dropdown-item ">Daftar Stok Menu</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Transaksi</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown"><i class="fe fe-calendar"></i> Order
                        <span class="badge badge-danger">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" class="dropdown-item ">All Order</a>
                      <a href="./icons.html" class="dropdown-item ">Di Tempat</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Meja</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown"><i class="fe fe-file"></i> Laporan
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" class="dropdown-item ">Transaksi</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="my-3 my-md-5">
          
        </div>
      </div> -->
      
      <footer class="footer" style="background-color: #915F6D!important;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 mt-3 mt-lg-0 text-center text-white">
              Copyright © <?= date('Y') ?> <a href="." class="text-white">Saluv Wedding</a>. All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
   <script src="<?= base_url('dist/assets/js/tabler.min.js?1684106062') ?>" defer></script>
    <script src="<?= base_url('dist/assets/js/demo.min.js?1684106062') ?>" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- js kategori -->
    <!-- js menu -->
    <!-- js customer -->

    <!-- Toastr -->
    <script src="<?= base_url('dist/assets/plugins/toaster/toastr.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>

    <script>

    $('.hapus-jadwal').click(function() {
        Swal.fire({
            title: 'Apakah Anda Yakin Akan Menghapus Data ?',
            text: "Data Yang Dihapus Tidak Dapat Dikembalikan, Hapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
        }).then((result) => {
            if (result.isConfirmed) {
                var id_jadwal = $(this).attr('data-id');
                $.ajax({
                    'url': '<?= base_url('jadwal/delete') ?>',
                    'type': 'POST',
                    'data': {
                        id_jadwal: id_jadwal
                    },
                    success: function() {
                        $('#' + id_jadwal).fadeOut();
                        Swal.fire({
                            icon: 'success',
                            type: 'success',
                            title: 'Berhasil!',
                            text: 'Berhasil Menghapus Data Jadwal',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                })

            }
        })
    });

    
    $('.hapus-ucapan').click(function() {
        Swal.fire({
            title: 'Apakah Anda Yakin Akan Menghapus Data ?',
            text: "Data Yang Dihapus Tidak Dapat Dikembalikan, Hapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
        }).then((result) => {
            if (result.isConfirmed) {
                var id_ucapan = $(this).attr('data-id');
                $.ajax({
                    'url': '<?= base_url('Ucapan/delete') ?>',
                    'type': 'POST',
                    'data': {
                        id_ucapan: id_ucapan
                    },
                    success: function() {
                        $('#' + id_ucapan).fadeOut();
                        Swal.fire({
                            icon: 'success',
                            type: 'success',
                            title: 'Berhasil!',
                            text: 'Berhasil Menghapus Data Ucapan & Doa',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                })

            }
        })
    });

    $('.hapus-amplop').click(function() {
        Swal.fire({
            title: 'Apakah Anda Yakin Akan Menghapus Data ?',
            text: "Data Yang Dihapus Tidak Dapat Dikembalikan, Hapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
        }).then((result) => {
            if (result.isConfirmed) {
                var id_amplop = $(this).attr('data-id');
                $.ajax({
                    'url': '<?= base_url('Amplop/delete') ?>',
                    'type': 'POST',
                    'data': {
                        id_amplop: id_amplop
                    },
                    success: function() {
                        $('#' + id_amplop).fadeOut();
                        Swal.fire({
                            icon: 'success',
                            type: 'success',
                            title: 'Berhasil!',
                            text: 'Berhasil Menghapus Data Amplop Digital',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                })

            }
        })
    });

    $('.hapus-mempelai').click(function() {
        Swal.fire({
            title: 'Apakah Anda Yakin Akan Menghapus Data ?',
            text: "Data Yang Dihapus Tidak Dapat Dikembalikan, Hapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
        }).then((result) => {
            if (result.isConfirmed) {
                var id_mempelai = $(this).attr('data-id');
                $.ajax({
                    'url': '<?= base_url('mempelai/delete') ?>',
                    'type': 'POST',
                    'data': {
                        id_mempelai: id_mempelai
                    },
                    success: function() {
                        $('#' + id_mempelai).fadeOut();
                        Swal.fire({
                            icon: 'success',
                            type: 'success',
                            title: 'Berhasil!',
                            text: 'Berhasil Menghapus Data Mempelai',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                })

            }
        })
    });
            $('#logout').click(function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Logout',
                    text: "Apakah anda ingin keluar dari halaman ini, Yakin?",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Keluar',
                    cancelButtonText: 'Batalkan',
                    showLoaderOnConfirm: true,
                    reverseButtons: true,
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                            Swal.fire({
                                icon: 'success',
                                type: 'success',
                                title: 'Berhasil!',
                                text: 'Anda Berhasil Logout, Terimakasih...',
                                showConfirmButton: false,
                            });
                            window.location = '<?php echo base_url('Login/logout') ?>';
                        });
                    },
                    allowOutsideClick: false
                });
               
            }); 
         function SwalLoading(html = 'Loading ...', title = '') {
                return Swal.fire({
                    title: title,
                    html: html,
                    customClass: 'swal-wide',
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 2000)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                    
                    }
                });
            }
    </script>
  </body>
</html>