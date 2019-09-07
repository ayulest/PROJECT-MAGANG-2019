<?php

include("../../../config.php");

if( isset($_GET['kd_admin']) ){

    // ambil kode dari query string
    $kd_admin= $_GET['kd_admin'];

    // buat query hapus
    $sql = "DELETE FROM table_login WHERE kd_admin=$kd_admin";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-user.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>