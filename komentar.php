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
<?php
  function waktu_lalu($timestamp){
    $selisih = time() - strtotime($timestamp) ;
    $detik = $selisih ;
    $menit = round($selisih / 60 );
    $jam = round($selisih / 3600 );
    $hari = round($selisih / 86400 );
    $minggu = round($selisih / 604800 );
    $bulan = round($selisih / 2419200 );
    $tahun = round($selisih / 29030400 );
                             
    if ($detik <= 60) {
        $waktu = $detik.' detik yang lalu';
    } else if ($menit <= 60) {
        $waktu = $menit.' menit yang lalu';
    } else if ($jam <= 24) {
        $waktu = $jam.' jam yang lalu';
    } else if ($hari <= 7) {
        $waktu = $hari.' hari yang lalu';
    } else if ($minggu <= 4) {
        $waktu = $minggu.' minggu yang lalu';
    } else if ($bulan <= 12) {
        $waktu = $bulan.' bulan yang lalu';
    } else {
        $waktu = $tahun.' tahun yang lalu';
    }
    
    return $waktu;
}
include "db.php";
$test = mysqli_query($con, "select * from komentar");
$test1 = mysqli_query($con, "select * from reply");

?>
<script>
function reply() {
    var x = document.getElementById("reply");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>                          
<body>  

           <h1>Comment   
           </h1>  
           <hr />  
           <div class="form-group">  
              <form  action="konfirmasi.php" method="post">  
                <div class="row">
                   <div class="col-sm-1">
      								<div class="thumbnail">
      									<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="100%" height="100%">
      								</div><!-- /thumbnail -->
							</div><!-- /col-sm-1 -->
                  <div class="col-sm-11">
	                   <textarea class="form-control" rows="5"  placeholder="Your Comment Please....." name="isi"></textarea> 
	               	
                   <br />  
                  <input type="Hidden" placeholder="nama" name="nama" id="harga" value="People" required />
                   <button class="btn btn-primary pull-right" type="submit">Comment</button>  
                  </div>
                </div>
                  </form>
                  <br><br><br>
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
                        <strong><?php echo "$data[1]";?></strong> 
                            

                       <p> <span class="text-muted"><?php echo waktu_lalu($data[3]);?></span></p>
                      </div>
                    <div class="panel-body">
                        <?php echo "$data[2]";?><button onclick="reply()" class="btn btn-primary pull-right" type="submit">Reply</button>
                        
                    </div><!-- /panel-body -->
                  </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
              </div>
                <br><br>
              <?php
                      include "db.php";
                      $result1=mysqli_query($con, "select * from reply order by id DESC");
                      
                      while($data1=mysqli_fetch_row($result1))
                      {?>
                          <div class="row">
                            
                          <div class="col-sm-11">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <strong><?php echo "$data1[1]";?></strong> 
                               <p> <span class="text-muted"><?php echo waktu_lalu($data1[3]);?></span></p>
                              </div>
                            <div class="panel-body">
                                <?php echo "$data1[2]";?><button onclick="reply()" class="btn btn-primary pull-right" type="submit">Reply</button>
                                
                            </div><!-- /panel-body -->
                          </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-5 -->
                        <div class="col-sm-1" >
                              <div class="thumbnail">
                                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->
                      </div>
                        <br><br>
                  <?php }?>
              <form  action="reply.php" method="post" id="reply" style="display: none;">
                <div class="row">
                         <div class="col-sm-11"> 
                              <textarea class="form-control" rows="5"  placeholder="Your Comment Please....." name="isi"></textarea>  
                               <br />  
                             <input type="Hidden" placeholder="nama" name="nama" id="harga" value="People" required />
                             <button class="btn btn-primary pull-right" type="submit">Reply</button>  
                            <br><br><Br>
                          </div>
                          <div class="col-sm-1" >
                              <div class="thumbnail">
                                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->
                          </div>
                          <br>
                        </form>

          <?php   }?>
        </div>

      
</body>