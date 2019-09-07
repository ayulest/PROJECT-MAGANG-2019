<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $kd_slider =$_POST['kd_slider'];
    $slide_img = $_POST['slide_img'];


    // buat query
    $sql = "INSERT INTO slider (kd_slider,slide_img) VALUE ('$kd_slider','$slide_img')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-slide.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-tambah-slide.php?status=gagal');
    }


}
else {
    die("Akses dilarang...");
}

?>