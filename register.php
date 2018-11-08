
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username); 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $trn_date = date("Y-m-d H:i:s");
  $cek_user=mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email='$_POST[email]'"));
      if ($cek_user > 0) {
        echo '<script>
              alert ("User Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
      }
      else{
        $query = "INSERT into `users` (username, password, email, trn_date)
      VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
              $result = mysqli_query($con,$query);
              if($result){
                    echo "<script>alert('Berhasil Register')</script>";
                    include 'index.php';
        }
      }
        
    }
    
?>
