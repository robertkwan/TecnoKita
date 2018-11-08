<?php
require_once "db.php";
$passwordlama = $_POST['passwordlama'];
$passwordbaru = $_POST['passwordbaru'];
$konfirmasipassword = $_POST['konfirmasipassword'];
$email = $_POST['email'];
$cekuser = "select * from users where email = '$email' and password = '".md5($passwordlama)."'";
$querycekuser = mysqli_query($con, $cekuser);
$count = mysqli_num_rows($querycekuser);
if ($count >= 1){
    $updatepassword = "update users set password = '".md5($passwordbaru)."' where email = '$email'";
    $updatequery = mysqli_query($con, $updatepassword);
    
    if($updatequery)
    {
        echo "<script>alert('Password telah diganti menjadi $passwordbaru')</script>";
        include 'index.php';
    }

}
else{
        echo "<script>alert('Password gagal di ganti')</script>";
        include 'index.php';
    }

?>