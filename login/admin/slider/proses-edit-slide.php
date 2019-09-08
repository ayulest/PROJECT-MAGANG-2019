<?php

include("../../../config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $kd_slider =$_POST['kd_slider'];
//    $slide_img = $_POST['slide_img'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 10440700){
            move_uploaded_file($file_tmp, '../../../images/'.$nama);
            $query = mysqli_query($db, "UPDATE slider SET gambar_slider='$nama' WHERE kd_slider='$kd_slider'");
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


