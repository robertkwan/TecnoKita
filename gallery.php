<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cara Membuat Auto Pop Up Responsive Menggunakan Bootstrap</title>
    <!-- CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Upload Profile User & Edit Profile User</h4>
          </div>
          <div class="modal-body">
            <img src="img/2.png" alt="" class="img-responsive" style="margin-left: 30%">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <?php 
             include 'db.php';
                //membaca data dari database  
                $result = mysqli_query($con, 'select * from foto');   
                $i = 1;  
                while($row = mysqli_fetch_array($result)){  
                ?>  
            <a href="edit-profile.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>  
             <?php  
            if($i % 3 == 0){  
                echo '</tr><tr>';  
            }  
            $i++;  
        }  
        ?>  
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#modal').modal('show');
    </script>
  
  </body>

</html>
