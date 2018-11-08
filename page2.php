  <div id="id04" class="modal">
  <form class="modal-content animate" action="pesan.php?id='<?php echo $d['id'];?>' method="post">
    <div class="container">
      <?php 
      include 'db.php';
        $i =  $_GET['id'];

      $data = mysqli_query($con,"select * from list where id = $i");
      while($d = mysqli_fetch_array($data)){
      ?>
      <p><img src="images/<?php echo $d['img'];?>" alt="" ></p>
        <?php  
           $i++;  }
         ?>
     <label for="nama"><b>Nama</b></label>
      <input type="text" placeholder="Enter Name" name="nama" id="nama" required>
     
      <label for="jlhpesanan"><b>Jumlah Pesanan</b></label>
      <select class="form-control"  name="jlhpesanan">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>

      <label for="harga"><b>Harga</b></label>
      <input type="text" placeholder="Enter New Password" name="harga" id="harga" disabled value="100000"  required>
        
      <input type="submit" data-toggle="modal" data-target="#myModal"style="background-color: #4CAF50;color: white;padding: 14px 20px; margin: 8px 0;border: none;cursor: pointer;width: 100%;" name="Pesan" value="Pesan"></input>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
