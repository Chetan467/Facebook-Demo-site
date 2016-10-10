<?php 
include("header.php");
$id=$_SESSION['userid'];
$con=mysqli_connect('localhost','root','','chetan');
$qy="select * from tbl_signup join tbl_friend on fk_int_user1_id=pk_int_id AND vchr_approved='0' AND fk_int_user2_id=$id";
$result=mysqli_query($con,$qy);
while($fetch=mysqli_fetch_row($result)){
	$id_1=$fetch[0];
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$phone=$fetch[5];
	$gender=$fetch[6];
	$pic=$fetch[8];
	$friendid=$fetch[9];
    if($pic==''){
    $pic="profile.gif";
}
?>
<form name="confirm" action="confirm.php" method="POST">
<table align="center">;
<tr><td><input type="hidden" name="friendid" value="<?php echo $id_1;?>"></input></td></tr>
<tr><td rowspan="6"><img width="150" height="150" src="images/profile_pic/<?php echo $pic;?>"></td></tr>
<tr><td><?php echo $fname.$lname;?></td></tr>
<tr><td><?php echo $email;?></td></tr>
<tr><td><?php echo $phone;?></td></tr>
<tr><td><?php echo $gender;?> </td></tr>
<tr><td><button>confirm</button></td></tr>
</form>
<?php
echo "</table>";
}
include("footer.php");
?>