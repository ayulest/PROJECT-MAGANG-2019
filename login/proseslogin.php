<?php
session_start();
include "../config.php";

$username = $_POST['username'];
$password = $_POST['password'];

// query untuk mendapatkan record dari username
$data = mysqli_query($db, "SELECT * FROM table_login WHERE username= '$username' and password=MD5('$password')");
$user = mysqli_fetch_assoc($data);
$cek = mysqli_num_rows($data);
$kd_admin = $user['kd_admin'];

if($cek  > 0) {
    $_SESSION['username']= $username;
    $_SESSION['status']= $user['status'];
    $_SESSION['username']= $user['username'];
    $_SESSION['kd_admin']= $kd_admin;


    $response['error'] = $user['username'];
    $response['error_kd'] = $_SESSION['kd_admin'];
    $response['error_cek'] = $cek;
    $response['error_status'] = $user['status'];

    if($_SESSION['STATUS'] == ""){
        header("Location:admin/index.php");
    } else if ($_SESSION['STATUS'] == "User"){
        header("Location:../home.php");
    }
    echo json_encode($response);
}else{
    echo '<script>
          alert("Gagal Login, Anda Belum Terdaftar!");
            window.location = "index.php"           
            </script>';
}
?>