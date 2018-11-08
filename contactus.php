<?php
require('db.php');
extract($_POST);
$nama = trim($_POST['nama']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);
if(empty($nama)){
	 echo "<script>alert('Nama Tidak Boleh Kosong')</script>";
            include 'about.php';
}
else if(empty($email)){
	 echo "<script>alert('Email Tidak Boleh Kosong')</script>";
            include 'about.php';
}
else if(empty($subject)){
	 echo "<script>alert('Subject Tidak Boleh Kosong')</script>";
            include 'about.php';
}
else if(empty($message)){
	 echo "<script>alert('Message Tidak Boleh Kosong')</script>";
            include 'about.php';
}
else{
	$sql = "INSERT into  contactus (nama,email,subject,message,created_date) VALUES('" . $nama . "','" . $email . "','" . $subject . "','" . $message . "','" . date('Y-m-d') . "')";
	$success = $con->query($sql);
	if (!$success) {
	    die("Couldn't enter data: ".$con->error);
	}
	 	include 'about.php';
		$con->close();

}
?>
