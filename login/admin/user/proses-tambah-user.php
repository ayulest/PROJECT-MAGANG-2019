<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $kd_admin =$_POST['kd_admin'];
    $nama = $_POST['nama'];
    $password =$_POST['password'];



    // buat query
    $sql = "INSERT INTO table_login (nama, password) VALUE ('$nama',MD5('$password'))";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-user.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-tambah-user.php?status=gagal');
    }


}
else {
    die("Akses dilarang...");
}

?>