<?php  
//koneksi ke database  
include 'db.php';
//upload file  
session_start();
if(!isset($_SESSION["username"])){
if(!empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){  
    $fileName = $_FILES['file']['name'];  
    $move = move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$fileName);  
    if($move){  
        if(!isset($_SESSION["username"]) == $_POST['first_name']){
        //simpan deskripsi dan nama file ke database  
        $sql = "insert into foto (nama_file, first_name, last_name, phone, mobile, email, location, hobby, alamat) values  
                ('$fileName', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['phone']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['location']."', '".$_POST['hobby']."', '".$_POST['alamat']."')";  
        mysqli_query($con, $sql);  
        header("Location: gallery.php");  
        exit;  }
    }  
}
}