<?php
include("header.php");
$id=$_SESSION['userid'];
$con=mysqli_connect('localhost','root','','chetan');
$qury="select * from tbl_signup where pk_int_id <> $id";
$result=mysqli_query($con,$qury);
while($fetch=mysqli_fetch_row($result)){
	$id_1=$fetch[0];
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$phone=$fetch[5];
	$gender=$fetch[6];
	$dob=$fetch[7];
	$profilepic=$fetch[8];
	if($profilepic=="")
	{
	  	$profilepic="profile.gif";
	  }
?>

<form name="addfriends" action="addfriend.php" method="POST">
<table align="center">
<tr><td><input type="hidden" name="friendid" value="<?php echo $id_1;?>"></input></td></tr>
<tr><td rowspan="6"><img width="150" height="150" src="images/profile_pic/<?php echo $profilepic;?>"></td></tr>
<tr><td><?php echo $fname.$lname;?></td></tr>
<tr><td><?php echo $email;?></td></tr>
<tr><td><?php echo $phone;?></td></tr>
<tr><td><?php echo $gender;?> </td></tr>
<tr><td><?php echo $dob;?> </td></tr>
<tr><td><button>Add Friend</button></td></tr>
</form>
<?php
echo "</table>";
}
include("footer.php");
?>
