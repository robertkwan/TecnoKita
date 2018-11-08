<?php  
//file delete-gallery.php  
//koneksi ke database  
include 'db.php';
if(isset($_GET['id'])){  
    $id = (int) $_GET['id'];  
    $sql = "select * from foto where id='$id'";  
    $result = mysqli_query($con,$sql);  
    if(mysqli_num_rows($result) > 0 ){  
        $data = mysqli_fetch_array($result);  
        //delete file  
        @unlink('img/'.$data['nama_file']);  
        //delete data di database  
        mysqli_query($con, "delete from foto where id='$id'");  
    }  
}   
header("Location: gallery.php");