<?php 
include("header.php");
$id=$_SESSION['userid'];
if(isset($_POST['userid'])){
    $fname=$_POST[1];
	$lname=$_POST[2];
	$email=$_POST[3];
	$password=$_POST[4];
	$phone=$_POST[5];
	$gender=$_POST[6];
	$dob=$_POST[7];
	$profile_pic=$_POST[8];
     $con=mysqli_connect('localhost','root','','chetan');
	$qry="update tbl_signup set vchr_fname=$fname, vchr_lname=$lname, vchr_email=$email, vchr_password=$password,
	vchr_phone=$phone, vchr_gender=$gender, bdy_date=$dob, vchr_profile_pic=$profile_pic where pk_int_id=$id ";

	$result=mysqli_query($con,$qry);
?>