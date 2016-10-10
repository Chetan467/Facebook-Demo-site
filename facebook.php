<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	
	#headerleft{
           background-color:#3b5998;
			height:75px;
			width:650px;
			float:left;




	
	}
	#headerright{
           background-color:#3b5998;
			height:75px;
			width:677px;
			float:left;
			color: white;
		     text-indent:60px;
		     font-family:corbel;

           
	
	}

#leftmenu{
	 float: left;
   background-color:#dfe3ee;
   height:600px;
   width: 680px;
		color:#003366;
		border:0;
		font-size:21px;
		font-weight: bold;
		font-family:Corbel; 
	

}


#rightmenu{
	float:left;
   background-color:#dfe3ee;
   height:600px;
   width:648px;
   }




#input1{
	width:190px;
	height: 35px;
	font-size:17px;
	border-radius:5px;
	text-indent: 10px;

	}
#input2{
	width: 385px;
	height:35px;
	font-size: 17px;
	border-radius:5px;
	text-indent: 10px;


	}
#button{
	background-color:#50ae2d;
	color: white;
	display:inline-block;
	font-weight: bold;
	border: none;
	font-size:18px;
	padding: 10px 25px;
	border-radius: 8px;
	}

#f1{
  color: black;
  font-size:12px;

}
a{
text-decoration:none;
}
#fb{
	padding-top: 10px;
	padding-left:140px;

}


</style>
<script>
	function facebook(){
   var email=document.login.email.value;
   var password=document.login.pwd.value;
   

	if(email==""||email.indexOf('@')==-1){
		alert("Please Enter Valid Email Or Proper Email Address");
		return false;
	}
	if(password==""||password.length<10){
		alert("Please Enter proper password wth min 10 character");
		return false;
	}
}
 function fsignup(){


 	var firstname=document.signup.fname.value;
   var lastname=document.signup.lname.value;
   var email1=document.signup.email1.value;
   var password1=document.signup.pswd.value;
   var mobile=document.signup.mobileno.value;
   var date=document.signup.date.value;
   var gender=document.signup.gender.value;
    if(firstname==""){
    	alert("Please Enter First Name");
    	return false;

    }
    if(lastname==""){
    	alert("Please Enter Last Name");
    	return false;
    	
    }
    if(email1==""||email1.indexOf('@')==-1){
		alert("Please Enter Valid email1 Address");
		return false;
	}
   if(password1==""){
   	alert("Give Proper Password Min 10 character");
   	return false;
   }
   if(mobile==""){
   	alert("Please Enter Valid or Proper Mobile number");
   	return false;
   }
   if(date==""){
   	alert("Select Your Date Of Birth");
   	return false;
   }
   if(gender==""){
   	alert("Select the Gender");
   	return false;
   }
}




</script>
</head>
<body>
<form name="login"  action="logincheck.php" method="POST"> 
	<div id="headerleft">
			 <img id="fb" src="logo.jpg" width="150" height="50">
	</div>
	<div id="headerright">
<table>
	<tr>
		<td>Email or Phone</td>
 		<td style="text-indent:10px;">Password</td>
 		
 	</tr>
 	<tr>
 		<td><input  type="email" name="email" autofocus="on"></td></input>
		<td style="text-indent:10px;"><input type="password" name="pwd"></input></td>
		<td style="text-indent:1px;"><button style="background-color:#3b5998;border-radius:2px; border-color:black; border:1px solid #0D447B; padding:4px 7px; color: white; font-weight: bold;" onClick="facebook()">Log In</button></td>
	</tr>
	<tr>
		<td><input type="checkbox">Keep me logged in</input></td>
		<td style="color:lightblue">forget your password?</td>
	</tr>
	</table>	
		</div>
		</form>

<form name="signup" action="savereg.php" method="POST" onsubmit="return fsignup()">
			<div id="leftmenu"><br>
                                 <table><tr><td style="text-indent:145px;">
         						Facebook helps to connect and share with</td></tr>
         						<tr><td style="text-indent:145px;">
         						the people in your life</td></tr>
         						<tr><td>
		 						<img src="fhome.png" style="padding-left:125px; height:200px; width:550px;"></td></tr>
		 						</table>
		 	</div>
			
			<div id="rightmenu">
			<Br>        
						<font  style="font-size:40px; font-weight:bold; font-family:Corbel;">Create an account</font><Br><br>
						<font style="font-size: 20px; font-weight: bold; font-family: Corbel;">It's free and always will be.
						</font> <br><br>
						<input id="input1" type="text" name="fname" placeholder="First Name" autocomplete="on" autofocus="on">
						<input id="input1" type="text" name="lname" placeholder="Last Name" autofocus="on" autocomplete="on"><br><br>
						<input id="input2" type="email" name="email1" placeholder="Email Address" autocomplete="on" autofocus="on"><br><br>
						<input id="input2" type="password" name="pswd" placeholder="Password" autocomplete="on" autofocus="on"><br><br>
						<input id="input2" type="number" name="mobileno" placeholder="Phone" autocomplete="on" autofocus="on" maxlength="10" minlength="10"></input><br>	<br>
						<font style="font-family: corbel; font-size: 25px;"> Bithday</font><br>
                        <input type="date" name="date" style="height:30px; width: 190px; font-size:20px; border-radius: 5px;"></input><br><br>
                        <input type="radio" name="gender" value="female">
                        <font style="font-family: corbel; font-size:20px;">Female
                        <input type="radio" name="gender" value="male">Male</font></input>
                        <br><br>

						<button name="clk_submit" id="button">Create an account</button><br><br>
						 <span style="color: blue;"> Create a Page</span>  for a celebrity, band or business.
						
			</div>
			<div>
				<table  align="center" cellspacing="15" style="color: blue">
				
				<tr>
				<td> Sign Up</td>
				<td>Log In</td>
				<td>Messanger</td>
				<td>Facebook Lite</td>
				<td>Mobile</td>
				<td>find Friends</td>
				<td>Badges</td>
				<td>People</td>
				<td>pages</td>
				<td>Places</td>
				<td>Games</td>
			</tr>
			<tr>
				<td>Locations</td>
				<td>Celebrities</td>
				<td>Groups</td>
				<td>Moments</td>
				<td>About</td>
				<td>Create Advert</td>
				<td>Create Page</td>
				<td>Develpoers</td>
				<td>Careers</td>
				<td>Privacy</td>
				<td>Cookies</td>
			</tr>
 				<td>Adchoices</td>
				<td>Terms</td>
				<td>Help</td>
				</tr>
				<tr>
				<td>
				<font id="f1"><a href="#">Facebook @2016</font></td>

			</table>
			
			
				


			</div>
</form>






</body>
</html>