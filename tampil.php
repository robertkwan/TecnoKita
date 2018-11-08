<html>
<head>
<title>Halaman Komentar</title>
<h1><center>Komentar Anda </center> </h1>
<?php
include "db.php";
$result=mysqli_query($con, "select * from komentar order by id DESC");
while($data=mysqli_fetch_row($result))
{
echo "<hr/>";
echo "<b>$data[1]</b><br>";
echo "$data[2]<br>";
}
?>
</body>
</html>