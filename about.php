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
#image_div
  {
     width:100%;
     position:relative;
  }
  #image_div img
  {
    width:100%;
    height: 50%;
  }
  #image_div #image_label
  {
     margin:0px;
     width: 100%;
     position:absolute;
     bottom:7px;
  }
  #image_div #image_label span
  {
     opacity:0.8;
     float: center;
     font-size:30px;
     padding:7px;
     box-sizing:border-box;
     color:white;
     font-weight:bold;
  }
  .lead{
    text-align: justify;
  }
  .avatar {
      vertical-align: middle;
      width: 100%;
      border-radius: 50%;
      text-align: justify;

  }
  #image_label{
    margin-bottom: auto;
    color: red;
  }
  .divider-header{
    display: block;
    width: 40px;
    height: 2px;
    margin: 0 auto;
    margin-bottom: 10px;
  }
  .btn-skin {
    color: #fff;
    background-color: #FE7A66;
    border-color: #FE7A66;
  }
  .bg-skin {
    background: #FE7A66;
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
    <script src="https://www.w3schools.com/lib/w3.js"></script>
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

<div id="id04" class="modal">
  <form class="modal-content animate" action="pesan.php" method="post" style="width: 100%;">
    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container" style="width: 100%;">
      <?php 
      include 'db.php';
        $i = 1;

      $data = mysqli_query($con,"select * from list where id = $i");
      while($d = mysqli_fetch_array($data)){
      ?>
      <p><img src="images/<?php echo $d['img'];?>" alt="" style="width: 100%;"></p>
        <?php  
           $i++;  }
         ?>
     <label for="nama"><b>Nama</b></label>
      <input type="text" placeholder="Enter Name" name="nama" id="nama" required>
     <script type="text/javascript">
       function changeFunc() {
        var selectBox = document.getElementById("jlhpesanan");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        document.getElementById('harga').innerHTML = selectedValue;
        document.getElementById('harga').value = product(selectedValue, 100000);
         document.getElementById('harga1').value = product(selectedValue, 100000);
       }
       function product(a,b){
          return a*b;
      }
      </script>
        <label><b>Jumlah Pesanan</b></label>
        <select class="form-control" name="jlhpesanan" id="jlhpesanan" onchange="changeFunc();">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      <label for="harga"><b>Harga</b></label>
       <input type="text" placeholder="Harga" name="harga" id="harga1" value="100000" disabled required />
      <input type="Hidden" placeholder="Harga" name="harga" id="harga" value="100000" required />
     
        
      <input type="submit" data-toggle="modal" data-target="#myModal" style="background-color: #4CAF50;color: white;padding: 14px 20px; margin: 8px 0;border: none;cursor: pointer;width: 100%;" name="Pesan" value="Pesan"></input>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form></div>





 <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">
                        <div class="modal-content">
                                   <div class="modal-header btn-success" >
                                         <button type="button" class="close" data-dismiss="modal">×</button>
                                         <h4 class="modal-title">Berhasil</h4>
                                   </div>
                                   <div class="modal-body">
                                         <p>Pesanan anda sedang di proses</p>
                                   </div>
                                   <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                   </div>
                        </div>

            </div>
     </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
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
      <ul class="nav navbar-nav navbar-right" style="margin-top: 5px; margin-right: 0px">
       <form class="navbar-form navbar-left" action="cari.php" method="get">
          <div class="form-group">
  				  <input type="text" name="nama" class="form-control" placeholder="Search">
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

 <div id="image_div">
      <img class="nature" src="images/web.jpg">
      <img class="nature" src="img/instal.jpg" >
      <img class="nature" src="images/dekstop.jpg">
      <script>
        w3.slideshow(".nature", 4000);
      </script>
      
     <!-- <p id="image_label" style="text-align: center;"><span style="color: black;">Get Started In Your Businness</span></p>
      <p id="image_label" style="text-align: center;"><span style="color: black;">Get Started Planing Businness</span></p>
       <p id="image_label" style="text-align: center;"><span style="color: black;">Get Your Profesionalis</span></p>
        <script>
          w3.slideshow("#image_label", 3000);
      </script>-->
  </div>

 <div class="container" style="margin-bottom: 20px; width: 100%;">
        <h2 class="text-center text-uppercase text-white">ABOUT</h2>
          <div class="divider-header" style="background: #666;"></div>    
        <div class="col-lg-8 col-lg-offset-2">
          <p style="font-size: 15px; text-align: justify;color: #444;">PT Jasa Pembuatan Aplikasi dibangun sejak tahun 2018 dengan tim yang telah dibentuk tim, Product kami menawarkan jasa pembuatan aplikasi web based profesional, kami berkerja profesional dengan menawarkan sebuah produk Web yang menarik dengan harga yang murah.Harga aplikasi mulai 100 ribu hingga 400 ribu, lama pengerjaan biasanya 2 minggu, max 1 bulan.Bahasa Pemrograman PHP, Desain Bootstrap, Database Mysql atau Postgress.Tampilan dijamin responsive bisa dibuka di HP maupun laptop.serta kami juga menerima instalasi laptop untuk Windows 7, 8, 10 beserta dengan driver dan software instalasi.</p>
        </div>
    </div>
    <link href="styles/ihover.css" rel="stylesheet">
        <div class="container">
          <h2 class="text-center text-uppercase text-white">TEAM</h2>
          <div class="divider-header" style="background: #666;"></div> 


    <div class="col-md-3">
    <div class="ih-item circle effect1" style="margin-bottom: 20px;"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="images/robert.jpg" alt="img" style="width: 100%;"></div>
        <div class="info">
          <div class="info-back">
            <h3>Robert Kwantoro</h3>
            <p>Job : Programmer</p>
          </div>
        </div></a></div>
    <!-- end normal -->
 
  </div>
          <div class="col-md-3">
            <div class="ih-item circle effect1" style="margin-bottom: 20px;"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="images/frans.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Frans Mikael Sinaga</h3>
            <p style="border-top: 0px;">Job : Analisis Sistem</p>
          </div>
        </div></a></div>
          </div>
      <div class="col-md-3">
          <div class="ih-item circle effect1" style="margin-bottom: 20px;"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="images/dona.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Maradona Jonas Simanullang</h3>
            <p style="border-top: 0px;text-align: left;">Job : Database Administrator</p>
          </div>
        </div></a></div>
      </div>
      <div class="col-md-3">
        <div class="ih-item circle effect1" style="margin-bottom: 20px;"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="images/adola.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Adola Silaban</h3>
            <p>Job : Desainer Ilustrator</p>
          </div>
        </div></a></div>
      </div>

</div>

<div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <div class="divider-header" style="background: #666;"></div>  
        <hr class="star-dark mb-5">
       </div>
        <div class="row" style="width: 100%;">
          <div class="col-md-8 col-md-offset-2" style="padding-right: 0px;">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate" action="contactus.php" method="post">
              <div class="control-group">
                <div class="col-md-6 xs-marginbot-20">
                  <input class="form-control" id="name" name="nama" type="text" placeholder="Enter Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="col-md-6">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Enter Email" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="col-md-12">
                 <input class="form-control" id="phone" name="subject" type="tel" placeholder="Subject" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="col-md-12">
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
               <div class="control-group">
                <div class="col-md-12">
                  <div id="success"></div>
                    <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg btn-block" style="margin: 0px;margin-bottom: 10px;">Send</button>
                </div>
              </div>
            </form>
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
           <div class="container" style="width: 80%;">
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