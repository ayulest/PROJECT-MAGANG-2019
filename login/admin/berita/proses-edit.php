<?php

include("../../../config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $kd_berita = $_POST['kd_berita'];
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $tgl_berita = $_POST['tgl_berita'];
    $image = $_POST['image'];
    $penulis_berita = $_POST['penulis_berita'];



    // buat query update
    $sql = "UPDATE berita SET judul_berita='$judul_berita', isi_berita='$isi_berita', tgl_berita='$tgl_berita', image='$image', penulis_berita='$penulis_berita' WHERE kd_berita='$kd_berita'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {

        header('Location: list-berita.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

