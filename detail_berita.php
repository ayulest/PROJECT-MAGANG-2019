<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dinas Kesehatan Provinsi Jawa Tengah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="goto-here">
<div class="py-2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
                <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
                <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>(024) 3511351</a>
                <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>mi_jateng@yahoo.co.id</a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo_dinkes.png" width="170" height="65"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="profil.php" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Profil</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item"
                           href="https://dinkesjatengprov.go.id/v2018/storage/2019/06/SOTK-DINKES-UPT-PER-1-NOV-2019..new_rifka.pdf">SOTK</a>
                        <a class="dropdown-item" href="tupoksi.php">TUPOKSI</a>
                        <a class="dropdown-item"
                           href="https://dinkesjatengprov.go.id/v2018/storage/2018/08/RENSTRA-dinkes-prov.pdf">RENSTRA</a>
                        <a class="dropdown-item"
                           href="https://dinkesjatengprov.go.id/v2018/storage/2019/06/Renstra-Perubahan-2018.pdf">RENSTRA
                            PERUBAHAN 2018</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Layanan Publik</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="https://ppid.dinkesjatengprov.go.id/ppid/informasi-berkala/">INFORMASI
                            BERKALA</a>
                        <a class="dropdown-item" href="https://ppid.dinkesjatengprov.go.id/ppid/serta-merta/">INFORMASI
                            SERTA MERTA</a>
                        <a class="dropdown-item" href="https://ppid.dinkesjatengprov.go.id/ppid/informasi-setiap-saat/">INFORMASI
                            SETIAP SAAT</a>
                    </div>
                </li>
                <li class="nav-item"><a href="https://ppid.dinkesjatengprov.go.id/ppid/" class="nav-link">PPID</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Download</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="download/orientasisip.php" target="_blank">ORIENTASI
                            SIP ASDK SETOS 31 JULI</a>
                        <a class="dropdown-item" href="download/materipelaporandata.php" target="_blank">MATERI
                            PELAPORAN DATA <br> KES GE27_28 JUNI</a>
                        <a class="dropdown-item" href="download/monevkomdat.php" target="_blank">MONEV
                            KOMDAT 21 MEI 2019</a>
                    </div>
                </li>
                <li class="nav-item"><a href="layanan.php" class="nav-link">Layanan</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="faq.php" class="nav-link">Faq</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


<div class="ftco-footer ftco-section1 ftco-subscribe-1 site-blocks-cover pb-4">
    <?php
include "config.php";
    $kd_berita= $_GET['kd_berita'];
$berita = mysqli_query($db,"SELECT * FROM berita WHERE kd_berita ='$kd_berita'");
while($array= mysqli_fetch_array($berita)){

    echo '
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">' . $array['judul_berita'] . '</h2>
                <p>' . $array['tgl_berita'] . '</p>
            </div>
        </div>
    </div>
</div>


<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="home.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">News</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 mb-4">
                <p class="mb-5">
                    <img src="images/'.$array['gambar_berita'].'" alt="Image" class="img-fluid">
                </p>
                <p align="justify">' . $array['isi_berita'] . '</p>
               </div>

        </div>
    </div>
    ';}?>
</div>


<footer class="ftco-footer ftco-section1">
            <div class="container">
                <div class="row">
                    <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                        </a>
                    </div>
                </div>
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Dinas Kesehatan <br>Provinsi Jawa Tengah</h2>
                    <p><img src="images/JATENG2.png" width="50%"></p>

                    <!--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>-->
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://twitter.com/dinkesjateng"><span
                                    class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/DINKESJATENG"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/dinkesjateng_prov/"><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="layanan.php" class="py-2 d-block">Layanan</a></li>
                        <li><a href="https://ppid.dinkesjatengprov.go.id/ppid/" class="py-2 d-block">PPID</a></li>
                        <li><a href="faq.php" class="py-2 d-block">FAQ</a></li>
                        <li><a href="contact.php" class="py-2 d-block">Our Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Link Terkait</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="https://laporgub.jatengprov.go.id/" class="py-2 d-block"><img
                                        src="images/Lapor-Gub.png" width="20%"></a></li>
                            <li><a href="https://jatengprov.go.id/" class="py-2 d-block"><img src="images/jayeng.png"
                                                                                              width="30%"></a></li>
                            <li><a href="https://bpjs-kesehatan.go.id/bpjs/" class="py-2 d-block"><img
                                        src="images/logo-bpjs.png" width="50%"></a></li>
                            <li><a href="http://ppid.jatengprov.go.id/" class="py-2 d-block"><img src="images/ppid.png"
                                                                                                  width="50%"></a></li>
                        </ul>
                        <!--                        <ul class="list-unstyled">-->
                        <!--                            <li><a href="#" class="py-2 d-block">FAQs</a></li>-->
                        <!--                            <li><a href="#" class="py-2 d-block">Contact</a></li>-->
                        <!--                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Jl. Piere Tendean No.24 Semarang</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">(024) 3511351</span></a>
                            </li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mi_jateng@yahoo.co.id</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="py-2 bg-light">
    <div class="container">
        <div class="row align-items-center align-content-center">
            <div class="col-lg-9 d-none d-lg-block">
                <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Hak Cipta © 2019 Dinkes
                    Provinsi Jawa Tengah</a>
            </div>
        </div>
    </div>
</div>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>

