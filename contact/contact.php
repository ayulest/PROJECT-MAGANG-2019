<?php
 
if($_POST) {
    $first = "";
    $last ="";
    $visitor_email = "";
    $email_title = "";
    $cara = "";
    $visitor_message = "";
    $phone = "";
    $format ="";
    $alasan ="";
    $address="";
    $ambil ="";
    $idnumber="";
    $pesan ="terima ksih telah menghubungi, kami akan segera merespon anda tn/ny : ";
     
    if(isset($_POST['pesan'])) {
        $pesan = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    
    }
    
    if(isset($_POST['first'])) {
        $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['last'])) {
        $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['address'])) {
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['phone'])) {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['idnumber'])) {
        $idnumber = filter_var($_POST['idnumber'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['cara'])) {
        $cara = filter_var($_POST['cara'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['format'])) {
        $format = filter_var($_POST['format'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['ambil'])) {
        $ambil = filter_var($_POST['ambil'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    
    }
    if(isset($_POST['alasan'])) {
        $alasan = htmlspecialchars($_POST['alasan']);
    } 
    if($cara == "softcopy") {
       //ganti email dinas
        $recipient = "gantiemaildinas@yahoo.com";
        
    }
   
    //ganti email dinas
    else {
        $recipient = "gantiemaildinas@yahoo.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $recipient . "\r\n";
     
    if(mail($recipient, $email_title, 
    "<table border='1' cellpadding='10' >
    <tr>
    <th colspan='3'> Pengajuan berkas </th>
    </tr>
    <tr>
        <td>Nama</td>
        <td>$first $last</td>
    </tr>
    <tr>
        <td>No KTP/SIM/Kartu Mahasiwa</td>
        <td>$idnumber</td>

    </tr>
    <tr>
        <td>Alamat </td>
        <td>$address</td>

    </tr>
    <tr>
        <td>Nomor Telepon </td>
        <td>$phone</td>

    </tr>
    <tr>
        <td>Email </td>
        <td>$visitor_email</td>
    </tr>
    <tr>
        <td>Cara Memperoleh Data </td>
        <td>$cara</td>

    </tr>
    <tr>
    <td>Format Yang Dibutuhkan </td>
    <td>$format</td>

</tr>
    <tr>
        <td>Data Yang Dibutuhkan</td>
        <td>$visitor_message</td>
    </tr>
    <tr>
        <td>Alasan Penggunaan Data</td>
        <td>$alasan</td>
    </tr>
    <tr>
        <td>Cara Mendapatkan Salinan Informasi</td>
        <td>$ambil</td>
    </tr>
    
  </table>"  
    
    
    , $headers)) {
        echo "<p>Thank you for contacting us, $first $last You will get a reply within 24 hours.</p>";
        echo (mail($visitor_email, "Dinkes Prov. Jateng", $pesan . $first . $last , $headers));

    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
?>