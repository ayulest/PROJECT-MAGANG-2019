<?php

include("../../../config.php");

if( isset($_GET['kd_berita']) ){

    // ambil kode dari query string
    $kd_berita= $_GET['kd_berita'];

    // buat query hapus
    $sql = "DELETE FROM berita WHERE kd_berita=$kd_berita";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-berita.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>