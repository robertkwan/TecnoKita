<style type="text/css">
  .thumbnail {
    padding:0px;
}
.panel {
  position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
  position:absolute;
  top:11px;left:-16px;
  right:100%;
  width:0;
  height:0;
  display:block;
  content:" ";
  border-color:transparent;
  border-style:solid solid outset;
  pointer-events:none;
}
.panel>.panel-heading:after{
  border-width:7px;
  border-right-color:#f7f7f7;
  margin-top:1px;
  margin-left:2px;
}
.panel>.panel-heading:before{
  border-right-color:#ddd;
  border-width:8px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<head runat="server">    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>  
</head>  
  
<body>  
           <h1>Comment   
           </h1>  
           <hr />  
           <div class="form-group">  
               <form  action="konfirmasi.php" method="post">  
                   <div class="col-sm-1">
      								<div class="thumbnail">
      									<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="100%" height="100%">
      								</div><!-- /thumbnail -->
							</div><!-- /col-sm-1 -->
              <input type="text" placeholder="nama" name="nama" id="harga1" value="People" disabled required />
              <input type="Hidden" placeholder="nama" name="nama" id="harga" value="People" required />
	           <textarea class="form-control" rows="5" placeholder="Your Comment Please....." style="width: 91%;" name="isi"></textarea> 
	         
                   <br />  
                   <button class="btn btn-success pull-right" type="submit">Comment</button>  
                   <br />  
                   <hr />  
                    </form>  
  <?php
include "db.php";
$result=mysqli_query($con, "select * from komentar order by id DESC");
while($data=mysqli_fetch_row($result))
{?>
  <div class="row">
<div class="col-sm-1" >
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-11">
<div class="panel panel-default">
<div class="panel-heading">
<strong><?php echo "$data[1]";?></strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
  <?php echo "$data[2]";?>
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div>
<?php		}?>
              
      
      
</body>