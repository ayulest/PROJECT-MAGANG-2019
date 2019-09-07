<?php

include("../../../config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $kd_slider =$_POST['kd_slider'];
    $slide_img = $_POST['slide_img'];


    // buat query update
    $sql = "UPDATE slider SET slide_img='$slide_img' WHERE kd_slider='$kd_slider'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {

        header('Location: list-slide.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

