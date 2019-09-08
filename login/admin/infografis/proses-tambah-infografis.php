<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
//    $kd_infografis =$_POST['kd_infografis'];
    $judul_infografis = $_POST['judul_infografis'];
//    $gambar = $_POST['gambar'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];


    // buat query
//    $sql = "INSERT INTO infografis (judul, gambar) VALUE ('$judul','$gambar')";
//    $query = mysqli_query($db, $sql);

//    // apakah query simpan berhasil?
//    if( $query ) {
//        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
//        header('Location: list-infografis.php?status=sukses');
//    } else {
//        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
//        header('Location: form-tambah-infografis.php?status=gagal');
//    }
//
//
//}
//else {
//    die("Akses dilarang...");
//}

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){
            move_uploaded_file($file_tmp, '../../../images/'.$nama);
            $query = mysqli_query($db, "INSERT INTO infografis (judul_infografis, gambar_infografis) VALUES('$judul_infografis','$nama')");
            if($query){
                echo ' 
						 <script>
        					alert("Berhasil Ditambahkan!");
        					window.location = "list-infografis.php"
      					 </script>';
            }else{
                echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "form-tambah-infografis.php"
      					 	</script>';
            }
        }else{
            echo '<script>
        					alert("File Terlalu Besar!!!");
        					
      					 </script>';
        }
    }
    else{
        echo '<script>
        					alert(Ekstensi File Tidak Diperbolehkan!!);
        			  </script>';
    }
}

?>