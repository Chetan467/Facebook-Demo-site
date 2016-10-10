<?php
include("header.php");
$id=$_SESSION['userid'];
$con=mysqli_connect('localhost','root','','chetan');
$qry="select * from tbl_signup where pk_int_id=$id";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_row($result))
{
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$password=$fetch[4];
	$phone=$fetch[5];
	$gender=$fetch[6];
	$dob=$fetch[7];
	$profile_pic=$fetch[8];
?>

	<table>
	<tr><td><a href="myprofile.php" style="text-decoration:none; border:1px solid black;margin-left:250px;background-color:#3b5998; color:white; padding:3px 7px;border-radius:3px">Back</a></td></tr>
	<form name="edit" action="saveprofile.php" method="POST" enctype="multipart/form-data">
	<tr><td><input type="hidden" name="profilepic" value="<?php echo $profile_pic;?>"></input></td>
	<tr><td>
	First name:<input type="text" name="fname" value="<?php echo $fname; ?>"></input></td></tr>
	<tr><td>
	Last name:<input type="text" name="lname" value="<?php echo $lname; ?>"></input></td></tr>
	<tr><td>
	Email Address:<input type="email" name="email" value="<?php echo $email; ?>"></input></td></tr>
	<tr><td>
	Password:<input type="password" name="password" value="<?php echo $password?>"></input></td></tr>
	<tr><td>
	Mobile No.<input type="phone" name="phone" value="<?php echo $phone; ?>"></input></td></tr>
	<tr><td>
	Gender:<input type="text" name="gender" value="<?php echo $gender; ?>"></input></td></tr>
	<tr><td>
	Date Of Birth:<input type="date" name="dob" value="<?php echo $dob; ?>"></input></td></tr>
	<tr><td>
	Upload Profile_pic:<input type="file" name="pic"></input></td></tr>

	<tr><td><button>SUBMIT</button></td></tr>
	<?php  
echo "</table>";
include("footer.php");
}
?>

