<!DOCTYPE html>
<html>

<style type="text/css">
  li a{
    margin-right: 10px;
    text-decoration: none;
    color: white;
    margin-left: 10px;
  }
  li{
    text-decoration: none;
  }
  .form-group{
    margin-left: 10px;
  }
  .navbar-brand{
    color: white;
  }
  p{
    text-align: justify;
  }
  input[type=text], input[type=password], input[type=email] {
      width: 100%;
      padding: 12px 20px;
      
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }
  .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
  }

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
span.email {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.container{
  width: 80%;
}
</style>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-logo.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
</head>
<body>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
var modal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id03');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div id="id02" class="modal">
  <form class="modal-content animate" action="register.php" method="post" style="width: 100%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/akun.png" alt="Avatar" class="avatar">
    </div>
    <div class="container" style="width: 100%;">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
    <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>    
      <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>     
      <input type="submit" style="background-color: #4CAF50;color: white;padding: 14px 20px; margin: 8px 0;border: none;cursor: pointer;width: 100%;" value="Register"></input>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1; width: 100%;">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn btn btn-danger">Cancel</button>
       <span class="psw">Forgot <a href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">password?</a></span>
    </div>
  </form>
</div>

<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="post" name="login" style="width: 100%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/akun.png" alt="Avatar" class="avatar">
    </div>
    <div class="container" style="width: 100%;">
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <input type="submit" style="background-color: #4CAF50;color: white;padding: 14px 20px; margin: 8px 0;border: none;cursor: pointer;width: 100%;" value="Login"></input>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1; width: 100%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn btn-danger">Cancel</button>
      <span class="psw">Forgot <a href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">password?</a></span>
    </div>
  </form>
</div>



<div id="id03" class="modal">
  <form class="modal-content animate" action="changepassword.php" method="post" style="width: 100%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/akun.png" alt="Avatar" class="avatar">
    </div>
    <div class="container" style="width: 100%;">
     <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
      <label for="password"><b>Password Lama</b></label>
      <input type="password" placeholder="Enter Old Password" name="passwordlama" id="passwordlama" required>
      
      <label for="password"><b>Password Baru</b></label>
      <input type="password" placeholder="Enter New Password" name="passwordbaru" id="passwordbaru" required>

      <label for="password"><b>Konfirmasi Password Baru</b></label>
      <input type="password" placeholder="Confirm New Password" name="konfirmasipassword" id="konfirmasipassword" required>
        
      <input type="submit" style="background-color: #4CAF50;color: white;padding: 14px 20px; margin: 8px 0;border: none;cursor: pointer;width: 100%;" name="change" value="Change Password"></input>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1; width: 100%;">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn btn btn-danger">Cancel</button>
    </div>
   
  </form>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="navbar-header bg-dark">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
       </button>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: black">
      <ul class="nav navbar-nav navbar-left">
      <li><a href="#" style="font-size: 16px"><img src="images/logo.jpg" style="width: 30px;height: 30px;border-radius: 20px;" alt="">  Jasa Pembuatan Aplikasi</a>
    </li>
  </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;margin-right: 0px;">
       <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
        <button class="btn btn-primary" style="margin-left: 5px;">Search</button>
      </div>
    </form>   
    <li><a href="index.php">Home</a></li>
    <li><a href="daftarpesan.php">Pesan</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
    <li><a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Daftar</a></li>
      </ul>
    </div>

</nav>
  
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="row" style="margin-right: 0px;margin-left: 5px;">
  <div class="col-sm-10">
  
<style type="text/css">
  @media screen and (max-width: 750px) {
    img{
      width:100%;
      height:100%;
    } 
}
</style>
<div class="panel panel-default">
      <div class="panel-heading"><b><h3>Penerimaan Instalasi Komputer</b></h3></div>
        <div class="panel-body" style="padding-right: 0px;padding-left: 0px;">
        <div class="col-md-4">
          <img src="img/instal.jpg" style="width: 100%;">
        </div>
        <div class="col-md-8">
           <h4 class="card-title" style="margin-top: 10px;"><p><b>Tukang Service Jasa Instal Ulang Laptop PC Komputer Panggilan di Medan Terpercaya Bergaransi dengan Windows Asli Bisa Diupdate</b></h4></p>
            <p>
               Kami menawarkan jasa servis instal ulang windows & instal ulang komputer, maintenance Notebook/Netbook dan PC, untuk yang berdomisili di daerah Medan dan sekitarnya.</p>
       <h4 class="card-title">Paket Instal</h4>
       <ul >
         <li>Paket Hemat : Instal Windows + Instal Driver = Rp.100.000</li></t>
         <li>Paket Basic : Instal Windows + Instal Driver + Software Harian = Rp.150.000</li>
         <li style="text-align: justify;">Paket Komplit : Instal Windows + Instal Driver + Software Harian + Windows Asli + Photoshop + Antivirus Lifetime= Rp. 200.000.</li>
       </ul>
       <h4 class="card-title">Daftar Software Harian</h4>
      <ul>
          <li>PDF Reader : Adobe Reader, Video Player : Media Player Classic / VLC</li>
          <li>Antivirus : Lifetime Antivirus Ampuh, Compress : WinRar</li>
          <li>Edit Foto : Photoscape, Browser : Google Chrome / Mozilla Firefox</li>
          <li style="text-align: justify;">Program Office : MS. Office 2013, 2016 (pilih salah satu), Download Manager : Internet Download Manager</li>
        
        
       
      </ul>
      <h4 class="card-title">Kontak Kami :</h4>
      <p>Informasi Pemesanan Instalasi Komputer dapat Langsung jumpa di tempat</p>
      <ul>
        <li>JL. M.H Thamrin No. 82R Medan</li>
        <li>WA : 081360238294</li>
        <li>Email : robetkwan@gmail.com</li>
      </ul>
  
</div>
</div>
</div>


<div class="panel panel-default">
      <div class="panel-heading"><b>News</b></div>
      <div class="panel-body">
<div class="row">
 <div class="col-sm-6">
    <div class="thumbnail">
    <div class="card-body">
      <div class="caption">
        <h5 class="card-title"><b>Pengembangan untuk Aplikasi</b></h5>
        <p class="card-text">Menerima Jasa pembuatan aplikasi dekstop, web dalam pemenuhan kebutuhan.</p>
        <a href="aplikasi.php" class="btn btn-large btn-block btn-primary">Read more...</a>
      </div>
    </div>
  </div>
</div>
  <div class="col-sm-6">
    <div class="thumbnail">
      <div class="card-body">
        <div class="caption">
        <h5 class="card-title"><b>Penerimaan Instalasi Komputer</b></h5>
        <p class="card-text">Menerima Instalasi OS Win 7, 8, 10, Antivirus, Software.</p>
        <a href="instal.php" class="btn btn-large btn-block btn-primary">Read more...</a>
      </div>
      </div>
    </div>
  </div>
</div>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>
</div>
<?php include 'komentar.php';?>
</div>




 <div class="col-sm-2">
 <div class="card mb-3">
  <img class="card-img-top" src="img/web.png" alt="Card image cap" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><b>Aplikasi berbasis Web</b></h5>
    <p class="card-text">Kami dapat membantu anda membangun sistem impian anda menggunakan PHP, Laravel, CI, Node JS, atau Ruby.Contoh sistem yang kami kembangkan :</p>
  <p>1. Aplikasi manajemen database.</p>
  <p>2. Aplikasi penjualan.</p>
  <p>3. Aplikasi CRM.</p>
  <p>4. Aplikasi Human Resource.</p>
  <p>5. Aplikasi ERP.</p>
  <p>6. Custom Solution</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card mb-3">
  <img class="card-img-top" src="img/dektop.png" alt="Card image cap" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><b>Aplikasi Berbasis Dekstop</b></h5>
    <p class="card-text">Kami dapat membantu anda membangun sistem impian anda menggunakan framework C#, VB.Contoh sistem yang kami kembangkan :</p>
    <p>1. Aplikasi Inventory Barang</p>
    <p>2. Aplikasi Penilaian Karyawan</p>
    <p>3. Aplikasi Rekrutmen Karyawan</p>
    <p class="card-text"><small class="text-muted">Last updated 4 mins ago</small></p>
  </div>
</div>

</div>
</div>

  </div>
 </div>
</div>

</div>

<footer id="myFooter">
        <div class="container" style="width: 80%; float: right;">
            <div class="row" style="width: 70%">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                     <h5>Information</h5>
                     <p> PT. Jasa Pembuatan Aplikasi bergerak di bidang IT dengan SDM yang memadai dan menerima Jasa Pembuatan Aplikasi Web dan Dekstop, Instalasi Software Komputer</p>
                    <p>Contact: robetkwan@gmail.com fransnagagarendam@gmail.com jonassimanullang94@gmail.com</p>
                    <p>No Hp  : 0813-6023-8294</p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
               <h2 class="logo"><a href="#" style="font-size: 16px"><img src="images/logo.jpg" style="width: 50px;height: 50px;border-radius: 30px;">  Jasa Pembuatan Aplikasi</a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</body>
</html>