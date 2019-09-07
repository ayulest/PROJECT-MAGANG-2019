<?php

include("../../../config.php");

if( isset($_GET['kd_slider']) ){

    // ambil kode dari query string
    $kd_slider= $_GET['kd_slider'];

    // buat query hapus
    $sql = "DELETE FROM slider WHERE kd_slider=$kd_slider";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-slide.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>