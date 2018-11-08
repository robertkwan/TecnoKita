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
li{
  margin-top: 3px;
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
      <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">
       <form class="navbar-form navbar-left" action="cari.php" method="get">
        <div class="form-group" style="margin-top: 5px;">
          <input type="text" name="nama" class="form-control" placeholder="Search">
          <button class="btn btn-primary" style="margin-left: 5px;">Search</button>
       </div>
    </form> 
		</form>		

                <li style="margin-top: 0px;"><a href="#"> <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" style="width: 30px;height: 30px;margin-right: 5px;border-radius: 20px;"><?php echo $_GET['username'];?></a></li>
          
		<li><a href="beranda1.php?username=<?php echo $_GET['username'];?>">Home</a></li>
		<li><a href="daftarpesan.php">Pesan</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="logout.php">Logout</a></li>

	
    </div>

</nav>
	<script type="text/javascript">
		$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
	</script>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container" style="width: 100%">
<div class="row">
	<div class="col-sm-10">
		<style type="text/css">
    
    </style>
		  <div class="panel panel-default">
      		<div class="panel-heading"><b>Profile</b></div>
      			<div class="col-sm-4 col-md-2">
      			 <div class="row">
      			<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3" style="text-align: center;"><h1><?php echo $_GET['username']?></h1></div>
    	
    </div>
   <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
  

  		<div class="col-sm-3"><!--left col-->
              
    <form name="form1" method="post" action="upload.php?username=<?php echo $_GET['username'];?>" enctype="multipart/form-data">
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" style="width: 200px;height: 200px;">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" name="file" id="file"/>
      </div></hr><br>

    
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="https://tecnokita.000webhostapp.com">tecnokita.000webhostapp.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Biodata</a></li>
            </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="#" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-md-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-md-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-md-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-md-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-md-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-md-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-md-6">
                              <label for="hobby"><h4>Hobby</h4></label>
                              <input type="text" class="form-control" name="hobby" id="hobby" placeholder="Hobby" title="enter your hobby.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-md-6">
                            <label for="alamat"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" title="enter your street.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-md-12">
                                <br>
                                
                              	<button class="btn btn-large btn-block btn-success" type="submit" name="save"><i class="glyphicon glyphicon-ok-sign"></i>Upload</button>
                               	<button class="btn btn-large btn-block btn-default" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
          
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
      				</div>
            </form>
      		
      	<div class="panel-body"></div></div>
		</div>


<div class="col-sm-2">
<div class="row">
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

</div>


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