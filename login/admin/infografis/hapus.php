<?php

include("../../../config.php");

if( isset($_GET['kd_infografis']) ){

    // ambil kode dari query string
    $kd_infografis= $_GET['kd_infografis'];

    // buat query hapus
    $sql = "DELETE FROM infografis WHERE kd_infografis=$kd_infografis";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-infografis.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>