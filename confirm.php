<?php 
include("header.php");
$id=$_SESSION['userid'];
$friendlistid=$_POST['friendid'];
$con=mysqli_connect('localhost','root','','chetan');
$qry="update tbl_friend set vchr_approved='1' where pk_int_friend_id=$friendlistid";
mysqli_query($con,$qry);
header("location:myfriendlist.php");

?>