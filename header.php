<?php
session_start();
$id=$_SESSION['userid'];
$con=mysqli_connect('localhost','root','','chetan');
$qry="select * from tbl_signup where pk_int_id=$id";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_row($result)) 
 {
  $fname=$fetch[1];
 $pic=$fetch[8];
}
if($pic==''){
$pic="profile.gif";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FACEBOOK</title>

</head>
<body>
	<table style="width:100%" cellspacing="0">
	<tr bgcolor="#3b5998">
	<td align="right">
	<a href="home.php"><img src="fblogo.png" style="padding-left:250px;" ></a></td>
	<td><input type="search" name="search" style="width:270px; height: 25px;margin: 0;" ></input></td>
	<td align="right"><img src="images/profile_pic/<?php echo $pic;?>" width="30" height="30"><font color="white">
	<?php echo $fname;?>
	 |</font> <a href="home.php" style="text-decoration: none;"><font color="white">Home</a> | </font>
	<a href="logout.php" style="text-decoration: none;"><font color="white">LogOut</font></a></td>
	</tr>
	<tr>
	<td bgcolor="#dfe3ee" width="500" height="600"><a href="myprofile.php" style="text-decoration:none; margin-left:30px;">My Profile</a><br>
	<a href="search.php" style="margin-left:30px; text-decoration:none">Search</a><br>
	<a href="friendrequest.php" style="margin-left:30px; text-decoration:none;">Friend Request</a><br>
	<a href="myfriendlist.php" style="margin-left:30px; text-decoration:none;">Friend List</a>
	</td>
	
	<td>
    