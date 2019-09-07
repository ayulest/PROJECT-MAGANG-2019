<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $kd_berita =$_POST['kd_berita'];
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $tgl_berita = $_POST['tgl_berita'];
    $image = $_POST['image'];
    $penulis_berita = $_POST['penulis_berita'];

   // buat query
    $sql = "INSERT INTO berita(judul_berita, isi_berita, tgl_berita, image, penulis_berita) VALUE ('$judul_berita','$isi_berita','$tgl_berita','$image','$penulis_berita')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-berita.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-tambahberita.php?status=gagal');
    }


}
else {
    die("Akses dilarang...");
}

?>