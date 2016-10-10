<?php
 session_start();
 if(isset($_POST['clk_submit'])){
 	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$email=$_POST['email1'];
 	$password=$_POST['pswd'];
 	$phone=$_POST['mobileno'];
 	$gender=$_POST['gender'];
 	$date=$_POST['date'];
 	
 }
$con=mysqli_connect('localhost','root','','chetan');
$qry="insert into tbl_signup values(null,'$fname','$lname','$email','$password','$phone','$gender','$date','')";
mysqli_query($con,$qry);
$id=mysqli_insert_id($con);
$_SESSION['userid']=$id;
header("location:home.php");


?>
<!-- insert data  into data base and start session -->