<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $tgl_berita = $_POST['tgl_berita'];
//    $gambar_berita = $_POST['gambar_berita'];
    $penulis_berita = $_POST['penulis_berita'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];


    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 10440700){
            move_uploaded_file($file_tmp, '../../../images/'.$nama);
            $query = mysqli_query($db, "INSERT INTO berita(judul_berita, isi_berita, tgl_berita, gambar_berita, penulis_berita) VALUE ('$judul_berita','$isi_berita','$tgl_berita','$nama','$penulis_berita')");
            if($query){
                echo ' 
						 <script>
        					alert("Berhasil Ditambahkan!");
        					window.location = "list-berita.php?status=sukses"
      					 </script>';
            }else{
                echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "form-tambah-berita.php?status=gagal"
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
