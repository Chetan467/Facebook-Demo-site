<?php 
session_start();
$friendid=$_POST['friendid'];
$id=$_SESSION['userid'];
$con=mysqli_connect('localhost','root','','chetan');
$qry="insert into tbl_friend values(null,$id, $friendid,'0')";
mysqli_query($con,$qry);
header("location:search.php");
?>