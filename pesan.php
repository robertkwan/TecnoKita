 <?php 
    include 'db.php';
     $i =  1;
    $data = mysqli_query($con,"select * from list where id = $i");
      while($d = mysqli_fetch_array($data)){
      ?>
       <?php 
        $img = $d['img'];
        $sql = "insert into pesan (img, nama, jlhpesanan, harga) values  
                ('".$img."', '".$_POST['nama']."', '".$_POST['jlhpesanan']."', '".$_POST['harga']."')";  ?>
        <?php  
            if($i % 3 == 0){  
                echo '</tr><tr>';  
            }  
            $i++;  }
            $query = mysqli_query($con, $sql);
            /*header("location:index.php");*/
            include "index.php";
            exit;  
        ?>  