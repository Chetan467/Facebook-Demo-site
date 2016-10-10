<?php
session_start();
$id=$_SESSION['userid'];
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$profile_pic=$_POST['profilepic'];

$filename=$profile_pic;
if(is_uploaded_file($_FILES['pic']['tmp_name'])){

	$currentposition=$_FILES['pic']['tmp_name'];
	$filename=rand().$_FILES['pic']['name'];
	$destination="images/profile_pic/".$filename;
	move_uploaded_file($currentposition,$destination);
}
$con=mysqli_connect('localhost','root','','chetan');
$qry="update tbl_signup set vchr_fname='$fname', vchr_lname='$lname', vchr_email='$email', vchr_password='$password',
	vchr_phone='$phone', vchr_gender='$gender', bdy_date='$dob', vchr_profile_pic='$filename' where pk_int_id=$id ";
mysqli_query($con,$qry);
header("location:myprofile.php")
?>