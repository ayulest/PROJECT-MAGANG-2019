<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 10440700){
            move_uploaded_file($file_tmp, '../../../images/'.$nama);
            $query = mysqli_query($db, "INSERT INTO slider (gambar_slider) VALUE ('$nama')");
            if($query){
                echo ' 
						 <script>
        					alert("Berhasil Ditambahkan!");
        					window.location = "list-slider.php"
      					 </script>';
            }else{
                echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "form-edit-slide.php"
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