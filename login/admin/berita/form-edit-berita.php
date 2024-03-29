<?php
session_start();
include("../../../config.php");

// kalau tidak ada id di query string
if (!isset($_GET['kd_berita'])) {
    header('Location: list-berita.php');
}

//ambil id dari query string
$kd_berita = $_GET['kd_berita'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM berita WHERE kd_berita=$kd_berita";
$query = mysqli_query($db, $sql);
$edit = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Tables</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="../index.php"><img src="../../../images/logo_dinkes.png" WIDTH="20%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
<!--                    <li class="nav-item">-->
<!--                        <div id="custom-search" class="top-search-bar">-->
<!--                            <input class="form-control" type="text" placeholder="Search..">-->
<!--                        </div>-->
<!--                    </li>-->
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../images/folder.png" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['username']; ?></h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="../../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Content</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-fw fa-wpforms"></i>Content
                                <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="list-berita.php">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../infografis/list-infografis.php">Infografis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../slider/list-slider.php">Slide</a>
                                    </li>
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>-->
                                    <!--                                        <div id="submenu-1-1" class="collapse submenu" style="">-->
                                    <!--                                            <ul class="nav flex-column">-->
                                    <!--                                                <li class="nav-item">-->
                                    <!--                                                    <a class="nav-link" href="dashboard-influencer.html">Influencer</a>-->
                                    <!--                                                </li>-->
                                    <!--                                                <li class="nav-item">-->
                                    <!--                                                    <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>-->
                                    <!--                                                </li>-->
                                    <!--                                                <li class="nav-item">-->
                                    <!--                                                    <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>-->
                                    <!--                                                </li>-->
                                    <!--                                            </ul>-->
                                    <!--                                        </div>-->
                                    <!--                                    </li>-->
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fa fa-fw fa-user-circle"></i>User</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../user/list-user.php">User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Form Edit</h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms Edit</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->

            <div class="row">
                <!-- ============================================================== -->
                <!-- validation form -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Form Edit Berita</h5>
                        <div class="card-body">
                            <form action="proses-edit-berita.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <input type="hidden" name="kd_berita" value="<?php echo $edit['kd_berita'] ?>"/>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for="judul_berita">Judul Berita</label>
                                        <input type="text" class="form-control" name="judul_berita"
                                               placeholder="Judul Berita" value="<?php echo $edit['judul_berita'] ?>">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for="file-input" class=" form-control-label">Upload Gambar</label></div>
                                    <div class="col-12 col-md-5"><input type="file" id="file" name="file" class="form-control-file" value="<?php echo $edit['gambar_berita']?>"><small class="form-text text-muted">.jpg . jpeg or .png</small></div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="tgl_berita">Tanggal</label>
                                        <input type="text" class="form-control" name="tgl_berita"
                                               placeholder="Tanggal Berita" value="<?php echo $edit['tgl_berita'] ?>">
                                        <div class="invalid-feedback">
                                            Please provide a valid date.
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="penulis_berita">Writer</label>
                                        <input type="text" class="form-control" name="penulis_berita"
                                               placeholder="Penulis Berita" value="<?php echo $edit['penulis_berita'] ?>">
                                        <div class="invalid-feedback">
                                            Insert admin name.
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for="isi_berita">Isi Berita</label>
                                        <textarea class="form-control" name="isi_berita" rows="3"
                                                  placeholder="Isi Berita"><?php echo $edit['isi_berita'] ?></textarea>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <br>
                                            <button class="btn btn-primary" type="submit" name="simpan">Submit form
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table  -->
                <!-- ============================================================== -->
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
<script src="../assets/libs/js/main-js.js"></script>
<script src="../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/vendor/datatables/js/data-table.js"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

</body>

</html>