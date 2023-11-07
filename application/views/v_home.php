<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title; ?></title>
    <meta name="theme-color" content="#795548" />
    <meta content name="descriptison">
    <meta content name="keywords">
    <meta property="og:image" content="https://user.mengundang.co.id/uploads/cover/66e807b0a860aebdda9659a056b1ecf0e7c6da16.jpg">
    <meta property="twitter:image" content="https://user.mengundang.co.id/uploads/cover/66e807b0a860aebdda9659a056b1ecf0e7c6da16.jpg">
    <meta property="og:title" content="The Wedding of, Vieri & Rere">
    <meta property="og:description" content="Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu dan Teman-teman menghadiri acara Pernikahan kami">
    <meta property="twitter:title" content="The Wedding of, Vieri & Rere">
    <meta property="twitter:description" content="Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu dan Teman-teman menghadiri acara Pernikahan kami">
    <meta name="twitter:card" content="summary_large_image">
    <meta data-rh="true" name="description" content="Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu dan Teman-teman menghadiri acara Pernikahan kami" />

    <link href="<?= base_url('assets/theme/assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/theme/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('dist/assets/plugins/toaster/toastr.css') ?>">

    <link href="<?= base_url('assets/theme/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/theme/assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/theme/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/theme/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/theme/assets/vendor/fontawesome/css/fontawesome.min.css') ?>">
    <link href="<?= base_url('assets/theme/assets/vendor/fontawesome/css/all.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/aos/aos.css') ?>" />
    <script src="<?= base_url('assets/qrcode/qrcode.js') ?>"></script>
</head>


<body>
    <div id="myModal" class="modal-img">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="image-container">
            <img class="modal-content" id="modalImg" src alt="Modal Image">
        </div>
        <a class="prev" onclick="showPreviousImage()">&#10094;</a>
        <a class="next" onclick="showNextImage()">&#10095;</a>
    </div>

    <div id="loader-wrapper">
        <div id="snow-animation-container"></div>
        <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
            <div class="ornamen white"></div>
            <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                <h2 style="padding-top:10px">Vieri <small style="font-size:40px">&</small> Rere</h2>
            </div>
        </div>

        <div class="aos-item mb-2" data-aos="fade-up" data-aos-duration="1000">
            <small style="color: #fff; margin-left:10px;margin-right:10px">Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu dan Teman-teman menghadiri acara Pernikahan kami</small>
        </div>
        <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
            <p class="sedang_loading" style="color: #fff; margin-left:10px;margin-right:10px"><i class="fas fa-spinner fa-pulse"></i> Sedang Memuat Undangan</p>
        </div>
        <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
           <a class="btn-open" hidden><i class="fas fa-envelope"></i> Buka Undangan</a>
        </div>
    </div>
    </div>

    <header id="header" class="fixed-bottom p-1" style="font-size:20px">
        <nav class="navbar navbar-light shadow-lg bg-white navbar-expand fixed-bottom ml-5 mr-5 mb-3 rounded-pill border">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-home" style="color: #915F6D;"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#team" class="nav-link"><i class="fas fa-heart" style="color: #915F6D;"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link"><i class="fas fa-calendar-alt" style="color: #915F6D;"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link"><i class="fas fa-images" style="color: #915F6D;"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link"><i class="fas fa-comments" style="color: #915F6D;"></i></a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="hero" style="background-color:#915F6D; width: 100%;
    background: url('<?= base_url('uploads/cover/hero-bg.jpg') ?>') top center;
    background-size: cover;
    position: relative;
    overflow: hidden;
    padding: 0;">
        <div class="hero-container">
            <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                <h2 style="margin-bottom:5px"><b>The Wedding of</b></h2>

                <h1 style="padding-top:10px">Vieri <small style="font-size:40px">&</small> Rere</h1>
            </div>

            <div class="model-alamat">
                <div class="line" style="padding: 0px 20px 0px 20px;display:flex;font-size:25px; color: #eeeeee; margin-left:15px;margin-right:15px">
                    <p style="margin:auto">Minggu</p>
                </div>
                <div class="tanggal-bulan">
                    <h4 style="color: #eeeeee;  font-size:40px;">29</h4>
                    <h4 style="color: #eeeeee ;  font-size:20px;">April </h4>
                </div>
                <div class="line" style="padding: 0px 20px 0px 20px;display:flex;font-size:25px; color: #eeeeee; margin-left:15px;margin-right:15px">
                    <p style="margin:auto">2024</p>
                </div>
            </div>
            <p style="padding-top:10px;font-size:18px;color: #eeeeee; margin-left:10px;margin-right:10px">13:00 - 20:00</p>
        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
<defs>
<path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
</defs>
<g class="wave1">
<use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
</g>
<g class="wave2">
<use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
</g>
<g class="wave3">
<use xlink:href="#wave-path" x="50" y="9" fill="#915F6D">
</g>
</svg>
    </section>
    <main id="main">

        <section id="about" class="about" style="background-color:#915F6D">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen white"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span style="color:#fff">Assalamualaikum wr wb.</span></h3>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="row content">
                        <div class="col-lg-12" style="color: #fff;">
                            <p style="text-align:center;"><br/> Mahasuci Allah telah menciptakan makhluk hidup dengan berpasang-pasangan. Begitu pula manusia. Sungguh besar rahmat dan karunia yang diberikan-Nya kepada keluarga Kami. <br/> Maka izinkan Kami mengundang sekaligus mengharapkan
                                doa restu dari bapak/ibu dan saudara/i dalam acara pernikahan putra dan putri kami.. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="team section canvas-bg" style="position:relative">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/bl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/br.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Bride & Groom</span></h3>
                        <p>Kami yang berbahagia</p>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($get_mempelai as $mp) : ?>
                    <div class="col-lg-6 col-md-6 align-items-center">
                        <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                            <div class="member">
                                <div class="member-img">
                                    <img style="object-fit:cover;width: 250px;height: 250px;" src="<?= base_url('uploads/mempelai/'.$mp->image) ?>" class="img-fluid" alt>
                                    <!-- <img style="object-fit:cover;width: 250px;height: 250px;" src="https://user.mengundang.co.id/uploads/cover/67642c6d5662c3fc3ec19f4de48bd78efc929c72.jpg" class="img-fluid" alt> -->
                                </div>
                                <div class="inner-img">
                                    <img src="<?= base_url('assets/border/15.webp') ?>" class="img-fluid" alt>
                                </div>
                                <div class="member-info">
                                    <h2><?= $mp->nama; ?></h2>
                                    <span><?= $mp->ket; ?> <?= $mp->ayah; ?> dan <?= $mp->ibu; ?></span>
                                </div>
                                <div class="member-sosmed">
                                    <a href="" class="text-center"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- <div class="col-lg-6 col-md-6 align-items-center">
                        <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                            <div class="member">
                                <div class="member-img">
                                    <img style="object-fit:cover;width: 250px;height: 250px;" src="https://user.mengundang.co.id/uploads/cover/9582cff8515300047d6ffaec35616cb4d152e2c0.jpg" class="img-fluid" alt>
                                </div>
                                <div class="inner-img">
                                    <img src="https://demo.mengundang.co.id/assets/border/15.webp" class="img-fluid" alt>
                                </div>
                                <div class="member-info">
                                    <h2>Renita Dwika Sari, S.E</h2>
                                    <span>Putri Pertama dari Bp. Udiin S dan Ibu Erlinda Wati</span>
                                </div>
                                <div class="member-sosmed">
                                    <a href="" class="text-center"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section id="pricing" class="pricing canvas-bg" style="position:relative">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Jadwal</span></h3>
                        <p>Kami mengharapkan kehadiran pada acara yang kami selenggarakan.</p>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000" style="padding-bottom: 30px;">
                    <div class="row">
                        <?php foreach($get_jadwal as $jd) : ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="box">
                                <h3><?= $jd->judul; ?></h3>
                                <p><?= $jd->alamat; ?></p>
                                <p><b><?= $jd->hari; ?>, <?= TanggalIndo($jd->tanggal); ?><br><?= $jd->jam; ?> - Selesai</b></p>
                                <div class="row text-center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6855452342716!2d106.52765797330889!3d-6.172839660486623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42015c47f7bcfd%3A0x77cae40ee8007cb0!2sGOR%20PASAR%20KEMIS!5e0!3m2!1sid!2sid!4v1698208748610!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!-- <iframe width="100%" height="250" src="https://maps.google.com/maps?q=0.466273,101.383643&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                </div>
                                <div class="btn-wrap">
                                    <a href="<?= $jd->link_maps; ?>" class="btn-buy" target="_blank">Buka Peta</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="box">
                                <h3>Resepsi II</h3>
                                <p>Jln Tuanku Tambusai, Perumahan Permai Indah, Blok A Nomor 11..</p>
                                <p><b>Minggu, 30 Juli 2023<br>13:00 - 20:00</b></p>
                                <div class="row text-center">
                                    <iframe width="100%" height="250" src="https://maps.google.com/maps?q=0.466273,101.383643&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="btn-wrap">
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=0.466273,101.383643&dir_action=navigate" class="btn-buy" target="_blank">Buka Peta</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="section-title section-bg" style="border-radius:30px">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h2><span>Menuju hari bahagia</span></h2>
                        <div id="countdown">
                            <div>
                                <span class="time" id="days"></span> Hari
                            </div>
                            <div>
                                <span class="time" id="hours"></span> Jam
                            </div>
                            <div>
                                <span class="time" id="minutes"></span> Menit
                            </div>
                            <div>
                                <span class="time" id="seconds"></span> Detik
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="features">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <h2>Covid-19</h2>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3>Protokol Kesehatan</h3>
                        <p>Stop Penyebaran Covid-19 Dengan Menerapkan Protokol Kesehatan.</p>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6 col-6">
                            <div class="icon-box">
                                <i class="fas fa-head-side-mask" style="color: #915F6D; width: 30px;"></i>
                                <h3><a href>Memakai Masker</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="icon-box">
                                <i class="fas fa-handshake-slash" style="color: #915F6D;"></i>
                                <h3><a href>Hindari Berjabat Tangan</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="fas fa-people-arrows" style="color: #915F6D;"></i>
                                <h3><a href>Menjaga Jarak</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="fas fa-hands-wash" style="color: #915F6D;"></i>
                                <h3><a href>Mencuci Tangan</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <img class="logo_streaming" style="margin-top:20px" height="50" src="https://demo.mengundang.co.id//assets/kemenkes.png">
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="about" style="position:relative;">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Live Streaming</span></h3>
                    </div>
                </div>
                <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                    <img class="logo_streaming" height="70" src="https://demo.mengundang.co.id/assets/live/ig.png">
                </div>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:20px; font-size:18px;">Bagi yang berhalangan datang, dapat menyaksikan Live Streaming yang telah kami sediakan.</p>
                        </div>
                        <a href="https://www.youtube.com/watch?v=5yx6BWlEVcY&ab_channel=ChillhopMusic" target="_blank" class="btn-learn-more">Buka Live Streaming</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="about canvas-bg" style="position: relative;">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Cerita Cinta</span></h3>
                    </div>
                </div>
                <?php foreach($get_cerita as $row) : ?>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="story_love d-flex align-items-end" style="background: url('<?= base_url('uploads/cerita/'.$row->foto) ?>') center center; background-size: cover;">
                        <div class="story_overlay">
                        </div>

                        <div class="story_love_title row">
                            <div class="col-lg-12">
                                <p style="padding-bottom:0x; font-size:25px;"><b><?= $row->judul; ?></b></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:16px;"><i><?= TanggalIndo($row->tanggal); ?></i></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:14px;">"<?= $row->keterangan; ?>."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="story_love d-flex align-items-end" style="background: url('https://user.mengundang.co.id/uploads/cover/fhdyt_2e557d9fa09d67444b8ec5ff32a9dd07b5e490b6.jpg') center center; background-size: cover;">
                        <div class="story_overlay">
                        </div>

                        <div class="story_love_title row">
                            <div class="col-lg-12">
                                <p style="padding-bottom:0x; font-size:25px;"><b>Lamaran</b></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:16px;"><i>28 Februari 2022</i></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:14px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="story_love d-flex align-items-end" style="background: url('https://user.mengundang.co.id/uploads/cover/9582cff8515300047d6ffaec35616cb4d152e2c0.jpg') center center; background-size: cover;">
                        <div class="story_overlay">
                        </div>

                        <div class="story_love_title row">
                            <div class="col-lg-12">
                                <p style="padding-bottom:0x; font-size:25px;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing</b></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:16px;"><i>31 Oktober 2022</i></p>
                            </div>
                            <div class="col-lg-12">
                                <p style="padding-bottom:0px; font-size:14px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit."</p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>

        <section id="portfolio" class="portfolio" style="position: relative;">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/bl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/br.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Galeri</span></h3>
                    </div>
                </div>
                <style media="screen">
                    .masonry-container {
                        -webkit-column-count: 3;
                        -moz-column-count: 3;
                        column-count: 3;
                        -webkit-column-gap: 15px;
                        -moz-column-gap: 15px;
                        column-gap: 15px;
                        padding-left: 10px;
                        padding-right: 10px;
                    }
                    
                    .masonry-item {
                        display: inline-block;
                        width: 100%;
                    }
                    
                    .masonry-item img {
                        display: block;
                        width: 100%;
                    }
                    
                    .masonry-item span {
                        font-family: sans-serif;
                        display: block;
                        padding: 10px;
                    }
                    
                    .masonry-item {
                        margin-bottom: 15px;
                        border-radius: 5px;
                    }
                    
                    @media (max-width: 768px) {
                        .masonry-container {
                            -webkit-column-count: 2;
                            -moz-column-count: 2;
                            column-count: 2;
                            -webkit-column-gap: 15px;
                            -moz-column-gap: 15px;
                            column-gap: 15px;
                        }
                    }
                </style>
                <div class="row content">
                    <div class="masonry-container">
                        <?php foreach($get_galeri as $gl) : ?>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('<?= base_url('uploads/galeri/'.$gl->foto) ?>')" src="<?= base_url('uploads/galeri/' .$gl->foto) ?>" />
                                <!-- <img id="myImg" onclick="album('fhdyt_c1cda8ab2aacfe7fa607c346bc51e47e12d2e3e6.jpg')" src="https://user.mengundang.co.id/uploads/cover/fhdyt_c1cda8ab2aacfe7fa607c346bc51e47e12d2e3e6.jpg" /> -->
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('fhdyt_98d74abc7627d2056b50b286dbd88734b533cbb4.jpg')" src="https://user.mengundang.co.id/uploads/cover/fhdyt_98d74abc7627d2056b50b286dbd88734b533cbb4.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('cc9102c88b252233f80b8a8a81967c8cebcab633.jpg')" src="https://user.mengundang.co.id/uploads/cover/cc9102c88b252233f80b8a8a81967c8cebcab633.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('279290f151cc2813ab06ac5970ffcd2f0ba8d1a4.jpg')" src="https://user.mengundang.co.id/uploads/cover/279290f151cc2813ab06ac5970ffcd2f0ba8d1a4.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('2baec05acd25cdc2af068dcdcff15e3d6ecf0114.jpg')" src="https://user.mengundang.co.id/uploads/cover/2baec05acd25cdc2af068dcdcff15e3d6ecf0114.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('66e807b0a860aebdda9659a056b1ecf0e7c6da16.jpg')" src="https://user.mengundang.co.id/uploads/cover/66e807b0a860aebdda9659a056b1ecf0e7c6da16.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('13e6535cc291e08f698c8ab47df95afc3fc35d11.jpg')" src="https://user.mengundang.co.id/uploads/cover/13e6535cc291e08f698c8ab47df95afc3fc35d11.jpg" />
                            </div>
                        </div>
                        <div class="aos-item" data-aos="flip-right" data-aos-duration="1000">
                            <div class="masonry-item">
                                <img id="myImg" onclick="album('500494cd2ab2fbb23b2b072e15fa35edb0d1fa79.jpg')" src="https://user.mengundang.co.id/uploads/cover/500494cd2ab2fbb23b2b072e15fa35edb0d1fa79.jpg" />
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Video</span></h3>
                        <p></p>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="row content">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ruyrOxAF66c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:30px;margin-left:15px;margin-right:15px"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section-informasi">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen white"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <h3><span style="color:#fff">QS. Ar-Rum: 21 </span></h3>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p style="text-align:center ;color:#fff"> وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنْفُسِكُمْ أَزْوَاجًا لِتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً ۚ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِقَوْمٍ يَتَفَكَّرُونَ<br/> “Dan di antara tanda-tanda kekuasaan-Nya
                                ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
                                terdapat tanda-tanda bagi kaum yang berfikir.” </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact canvas-bg">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Kirim Ucapan dan Doa</span></h3>
                    </div>
                </div>
                <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col-lg-12 mt-5 mt-lg-0">
                        <form action="<?= base_url('home/kirim') ?>" method="post" role="form" class="form-ucapan">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" value />
                                <?= form_error('nama', '<div class="err text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="">--Pilih Kehadiran--</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Belum Pasti">Belum Pasti</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select>
                                <?= form_error('status', '<div class="err text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="pesan" rows="5" placeholder="Ucapan dan Doa"></textarea>
                                <?= form_error('pesan', '<div class="err text-danger">', '</div>'); ?>
                            </div>
                            
                            <div class="text-center"><button type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="contact" class="faq">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                        <h3><span>Ucapan dan Doa</span></h3>
                    </div>
                </div>
                <ul class="faq-list" style="height: 300px; overflow-y: scroll;">
                <?php foreach($get_ucapan as $row) : ?>
                    <li>
                        <a data-toggle="collapse" class href="#faq9"><?= $row->nama; ?> </a>
                        <div id="faq9" class="collapse show" data-parent=".faq-list" style="word-wrap: break-word">
                            <p>"<?= $row->ucapan_doa; ?>"</p>
                        </div>
                        <hr>
                    </li>
                 <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section id="pricing" class="about section canvas-bg" style="position: relative;">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/bl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-down" data-aos-duration="1000" style="position:absolute;top:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/tr.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/br.webp">
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <div class="ornamen colored"></div>
                    </div>
                    <div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <h3><span>Amplop Digital</span></h3>
                    </div>
                </div>
                <!-- <div class="aos-item amplop" data-aos="zoom-in" data-aos-duration="1000">
                    <img class="logo_streaming" height="50" src="https://demo.mengundang.co.id/assets/bank/ovo.png">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:1px; font-size:17px;"><b>082228899882</b></p>
                        </div>
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:10px; font-size:14px;">a/n Muhammad Fatih</p>
                        </div>
                        <a target="_blank" class="btn-amplop copy" rekening="082228899882">Salin</a>
                    </div>
                </div>
                <div class="aos-item amplop" data-aos="zoom-in" data-aos-duration="1000">
                    <img class="logo_streaming" height="50" src="https://demo.mengundang.co.id/assets/bank/kado.png">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:1px; font-size:17px;">Kirim Kado</p>
                        </div>
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:1px; font-size:17px;"><b>Jln Tuanku Tambusai, Perumahan Permai Indah, Blok A Nomor 11.</b></p>
                        </div>
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:10px; font-size:14px;">a/n Vieri Satria Ardiansyah</p>
                        </div>
                        <a target="_blank" class="btn-amplop copy" rekening="Jln Tuanku Tambusai, Perumahan Permai Indah, Blok A Nomor 11.">Salin</a>
                    </div>
                </div> -->
                <?php foreach($get_amplop as $row) : ?>
                <div class="aos-item amplop" data-aos="zoom-in" data-aos-duration="1000">
                    <img class="logo_streaming" height="50" src="<?= base_url('uploads/amplop/'.$row->foto) ?>">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:1px; font-size:17px;"><b><?= $row->no_hp_rek; ?></b></p>
                        </div>
                        <div class="col-lg-12">
                            <p style="text-align:center;padding-bottom:10px; font-size:14px;">A/n <?= $row->nama; ?></p>
                        </div>
                        <a target="_blank" class="btn-amplop copy" rekening="<?= $row->no_hp_rek; ?>">Salin</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="about" class="about section-bg">
            <div class="container">
                <div class="section-title">
                    <div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="https://user.mengundang.co.id/uploads/cover/279290f151cc2813ab06ac5970ffcd2f0ba8d1a4.jpg" class="img-fluid" alt>
                    </div>
                    <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                        <h3><span>Sampai Jumpa Di Hari Bahagia Kami</span></h3>
                    </div>
                </div>

                <div class="section-title-penutup">
                </div>
            </div>
        </section>
        <section id="about" class="about section-bg" style="position:relative;height:400px;display:flex;align-items: center;">
            <div style="position: static;">
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;left:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/bl.webp">
                </div>
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000" style="position:absolute;bottom:0;right:0">
                    <img class="border-content" src="https://demo.mengundang.co.id/assets/corner/4/br.webp">
                </div>
            </div>
            <div class="container">
                <div class="aos-item" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="row content">
                        <div class="col-lg-12">
                            <div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
                                <div class="ornamen colored"></div>
                            </div>
                            <h1 class="pengantin-penutup">Vieri <br><small>&</small><br> Rere</h1>
                        </div>
                    </div>
                </div>
                <div class="section-title-penutup">
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" style="padding-bottom:80px">
        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
                <div class="copyright">
                    <b>Presented by</b> <br>
                    <img src="https://demo.mengundang.co.id/assets/reseller/1.png" alt height="40px" style="margin:10px"><br>
                    <strong><span><a href="https://saluvwedding.co.id/">saluvwedding.co.id</a></span></strong>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://saluvwedding.co.id" class="twitter"><i class="bx bx-globe"></i></a>
                <a href="https://wa.me/62895336769180?text=Halo Kak, Saya berminat untuk membuat Web Undangan Online." class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.instagram.com/mengundang.co.id/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <a class="musik"><i id="musik" class="ri-music-2-line "></i></a>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <script src="<?= base_url('assets/theme/assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/fontawesome/js/all.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/assets/vendor/fontawesome/js/fontawesome.min.js') ?>"></script>
    <script src="<?= base_url('assets/mosaicflow/jquery.mosaicflow.min.js') ?>"></script>
    <script src="<?= base_url('assets/aos/aos.js') ?>"></script>

    <script src="<?= base_url('assets/theme/assets/js/main.js') ?>"></script>
    <script src="<?= base_url('dist/assets/plugins/toaster/toastr.min.js') ?>"></script>

    <script src="<?= base_url('assets/howler/dist/howler.js') ?>"></script>
    
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
    <script>
        let autoplay = true;
        let soundID;
        var sound = new Howl({
            src: ['<?= base_url('assets/mp3/Tiara Andini - Cintanya Aku.mp3') ?>'],
            //html5: true,
            autoplay: autoplay,
            loop: true,
        });

        soundID = sound.play();

        $(".musik").on("click", function() {
            if (!sound.playing()) {
                sound.play();
                $("i#musik").attr("class", "ri-music-2-line ")
            } else {
                sound.pause();
                $("i#musik").attr("class", "ri-play-fill ")
            }
        })

        AOS.init({
            easing: 'ease-in-out-sine'
        });
        // Set the date we're counting down to
        // var countDownDate = new Date("2023-07-30 13:00:00").getTime();
        var tanggal_acara = "2024-04-29 12:00:00"
        var countDownDate = new Date(tanggal_acara.replace(' ', 'T')).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the corresponding elements
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "Acara Telah Selesai";
            }
        }, 1000);

        function copyToClipboard(elem) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(elem).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $(".copy").on("click", function() {
            var elem = $(this).attr("rekening")
            alert("Rekening Berhasil disalin.")
            copyToClipboard(elem)
        })

        $(".btn-open").on("click", function() {
            $("#loader-wrapper").fadeToggle(1500);
            AOS.refresh();
            if (!sound.playing()) {
                sound.play();
                $("i#musik").attr("class", "ri-music-2-line ")
            } else {

            }
        })

        $(window).on('load', function() {
            $(".sedang_loading").attr("hidden", true)
            $(".btn-open").attr("hidden", false)

        })

        var currentImageIndex = 0;
        var galeriLength = 8;

        function album(imageSrc) {
            // Dapatkan elemen modal dan elemen gambar modal
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("modalImg");

            // Atur sumber gambar modal dengan sumber gambar yang di-klik
            modalImg.src = "<?= base_url() ?>" + imageSrc;

            // Tentukan indeks gambar saat ini berdasarkan sumber gambar yang di-klik
            currentImageIndex = Array.from(document.querySelectorAll(".masonry-item img")).findIndex(function(img) {
                return img.src === modalImg.src;
            });

            // Tampilkan modal
            modal.style.display = "block";
        }

        function closeModal() {
            // Dapatkan elemen modal
            var modal = document.getElementById("myModal");

            // Sembunyikan modal
            modal.style.display = "none";
        }

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % galeriLength;
            var nextImageSrc = document.querySelectorAll(".masonry-item img")[currentImageIndex].src;
            var modalImg = document.getElementById("modalImg");
            modalImg.src = nextImageSrc;
        }

        function showPreviousImage() {
            currentImageIndex = (currentImageIndex - 1 + galeriLength) % galeriLength;
            var previousImageSrc = document.querySelectorAll(".masonry-item img")[currentImageIndex].src;
            var modalImg = document.getElementById("modalImg");
            modalImg.src = previousImageSrc;
        }
    </script>
    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100,
            colorDark: "#000000",
            colorLight: "#ffffff",
        });

        function makeCode() {
            qrcode.makeCode("demo.mengundang.co.id/");
        }

        makeCode();
    </script>

    <script type="text/javascript">
        var _Hasync = _Hasync || [];
        _Hasync.push(['Histats.start', '1,4599797,4,0,0,0,00010000']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
            var hs = document.createElement('script');
            hs.type = 'text/javascript';
            hs.async = true;
            hs.src = ('//s10.histats.com/js15_as.js');
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();
    </script>
    <noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4599797&101" alt="web log free" border="0"></a></noscript>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-180450628-1');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(documentReady);

        function documentReady() {
            var MAX_SNOW = 200;
            var MAX_SNOW_SIZE = 7;
            var MAX_SNOW_SPEED = 5;

            snowStart();

            function snowStart() {
                // console.log("// Snow animation start");
                createSnows();
            }

            function createSnows() {

                var container = $("#snow-animation-container");

                for (var i = 0; i < MAX_SNOW; i++) {
                    var appendItem = getRandomItem(i);
                    container.append(appendItem);
                    var animateItem = $(".snow" + String(i));
                    var randomTime = Math.random() * MAX_SNOW_SPEED;
                    goAnimate(animateItem, i, randomTime);
                    goAnimate2(animateItem);
                };

                // console.log("// Create snows");
            }

            function goAnimate(item, id, randomTime) {
                TweenMax.to(item, randomTime, {
                    css: {
                        marginTop: "+=100"
                    },
                    ease: Linear.easeNone,
                    onComplete: function() {
                        var topPosition = item.css("margin-top").replace("px", "");
                        if (topPosition > $(window).height()) {
                            changePosition(item);
                            randomTime = Math.random() * MAX_SNOW_SPEED;
                            goAnimate(item, id, randomTime);
                        } else {
                            goAnimate(item, id, randomTime);
                        }

                    }
                });
            }

            function goAnimate2(item) {

                var directionTime = 1 + Math.floor(Math.random() * 5);
                var randomDirection = 1 + Math.floor(Math.random() * 4);
                var delayTime = 1 + Math.floor(Math.random() * 3);

                if (randomDirection == 1) {

                    TweenMax.to(item, directionTime, {
                        css: {
                            marginLeft: "+=100"
                        },
                        ease: Linear.easeOut,
                        onComplete: function() {

                            TweenMax.to(item, directionTime, {
                                css: {
                                    marginLeft: "-=100"
                                },
                                delay: delayTime,
                                ease: Linear.easeOut,
                                onComplete: function() {
                                    goAnimate2(item);
                                }
                            });
                        }
                    });
                } else if (randomDirection == 2) {

                    TweenMax.to(item, directionTime, {
                        css: {
                            marginLeft: "-=100"
                        },
                        ease: Linear.easeOut,
                        onComplete: function() {
                            TweenMax.to(item, directionTime, {
                                css: {
                                    marginLeft: "+=100"
                                },
                                delay: delayTime,
                                ease: Linear.easeOut,
                                onComplete: function() {

                                    goAnimate2(item);

                                }
                            });
                        }
                    });
                } else if (randomDirection == 3) {

                    TweenMax.to(item, directionTime, {
                        css: {
                            marginLeft: "+=100"
                        },
                        ease: Linear.easeOut,
                        onComplete: function() {
                            goAnimate2(item);
                        }
                    });
                } else if (randomDirection == 4) {

                    TweenMax.to(item, directionTime, {
                        css: {
                            marginLeft: "-=100"
                        },
                        ease: Linear.easeOut,
                        onComplete: function() {
                            goAnimate2(item);
                        }
                    });
                }
            }

            function changePosition(item) {
                var _width = Math.floor(Math.random() * MAX_SNOW_SIZE);
                var _height = _width;
                var _blur = Math.floor(Math.random() * 5 + 2);
                var _left = Math.floor(Math.random() * ($(window).width() - _width));
                var _top = -$(window).height() + Math.floor(Math.random() * ($(window).height() - _height));

                item.css("width", _width);
                item.css("height", _height);
                item.css("margin-left", _left);
                item.css("margin-top", _top);
                item.css("-webkit-filter", "blur(" + String(_blur) + "px)");
                item.css("-moz-filter", "blur(" + String(_blur) + "px)");
                item.css("-o-filter", "blur(" + String(_blur) + "px)");
                item.css("-ms-filter", "blur(" + String(_blur) + "px)");
                item.css("filter", "blur(" + String(_blur) + "px)");
            }

            function getRandomItem(id) {
                var _width = Math.floor(Math.random() * MAX_SNOW_SIZE);
                var _height = _width;
                var _blur = Math.floor(Math.random() * 5 + 2);
                var _left = Math.floor(Math.random() * ($(window).width() - _width));
                var _top = -$(window).height() + Math.floor(Math.random() * ($(window).height() - _height));
                var _id = id;

                return getSmallSnow(_width, _height, _blur, _left, _top, _id);
            }

            function getSmallSnow(width, height, blur, left, top, id) {
                var item = "<div class='snow" + id + "' style='position:absolute; margin-left: " + left + "px; margin-top: " + top + "px; width: " + width + "px; height: " + height + "px; border-radius: 50%; background-color: white; -webkit-filter: blur(" + blur + "px); -moz-filter: blur(" + blur + "px); -o-filter: blur(" + blur + "px); -ms-filter: blur(" + blur + "px); filter: blur(" + blur + "px);'></div>"
                return item;
            }

        }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>