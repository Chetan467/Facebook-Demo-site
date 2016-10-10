<?php
include("header.php");
$con=mysqli_connect('localhost','root','','chetan');
$qry="select * from tbl_signup where pk_int_id=$id";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_row($result)){
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$phone=$fetch[5];
	$gender=$fetch[6];
	$dob=$fetch[7];	
?>
<table border="0" align="center">
<tr><td><a href="editprofile.php" style="text-decoration:none; border:1px solid black;margin-left:200px;background-color:#3b5998; color:white; padding:3px 7px;border-radius:3px">Edit</a></td></tr>
<tr><td>First Name-<?php echo $fname;?> </td></tr>
<tr><td>Last Name-<?php echo $lname;?> </td></tr>
<tr><td>Email-<?php echo $email;?> </td></tr>
<tr><td>Mobile No-<?php echo $phone;?> </td></tr>
<tr><td>gender-<?php echo $gender;?> </td></tr>
<tr><td>Date Of Birth-<?php echo $dob;?> </td></tr>
<?php  
echo "</table>";
include("footer.php");
}
?>