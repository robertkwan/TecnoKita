<?php
require('db.php');
  if (isset($_POST['email'])){
        // removes backslashes
  $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['email'] = $email;
            // Redirect user to index.php
            echo "<script>alert('Berhasil Login')</script>";
            include 'beranda.php';
            
         }
         else if($rows<1){
          echo "<script>alert('Gagal Login')</script>";
            include 'index.php';
         }
    }else{}
?>