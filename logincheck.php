<?php
session_start();
$email=$_POST['email'];
$password=$_POST['pwd'];
$con=mysqli_connect('localhost','root','','chetan');
$qry="select pk_int_id from tbl_signup where vchr_email='$email' and vchr_password='$password'";
$result=mysqli_query($con,$qry);
$id=0;
while($fetch=mysqli_fetch_row($result)){
$id=$fetch[0];
}
if($id>0){
	$_SESSION['userid']=$id;
header("location:home.php");
}
else{
	
	header("location:facebook.php?status=failed");
}
?>















<!-- check eamil and password from data base inserted into the signup table into database-->