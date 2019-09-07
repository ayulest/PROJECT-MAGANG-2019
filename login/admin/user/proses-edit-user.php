<?php

include("../../../config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $kd_admin =$_POST['kd_admin'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];


    // buat query update
    $sql = "UPDATE table_login SET nama='$nama', password=MD5('$password')WHERE kd_admin='$kd_admin'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {

        header('Location: list-user.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

