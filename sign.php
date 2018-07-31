<?php
$host="localhost";
$user="root";
$pass="";
$db="frositedb";
$conn=new mysqli($servername,$username,$pass,$db);
if(mysqli_connect_errno()/*$conn->connect_error()*/)
{
echo"failed to connect to mysql:".$conn->connect_error;
}
echo "connected succesfully";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset(['username'])){
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from regtb where email='".$email."' AND password='".$password."'
limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
echo'<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" type="image" href="image/FS-Logo-2.png" />
		<title>Frosite</title>
		<link type="text/css" rel="stylesheet" href="mystyle.css"/>
		<link type="text/css" rel="stylesheet" href="parallax.css"/>
		<style>
.button {
    border:hidden;
	top:50%;
    color:black;
    padding: 15px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:15px;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.button:hover{
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		color:#4D408D;
		padding:11px 30px;	
		border:2px solid #4D408D;

}
</style>
	</head>
	<body>
	<div class="parallax">
		<p align="left"><font size="25" style="color:white" > FROSITE</font></p>
		<div align="right">
			<font face="Lucida Sans Unicode", "Lucida Grande", sans-serif>
			<table cellspacing="5" cellpadding="10">
				<tr>
					<td><a href="webign.html" class="button">Home</a></td>
					<td><a href="webign.html#w1" class="button">Features</a></td>
					<td><a href="templates.html" class="button">Templates</a></td>
					<td><a href="explore.html" class="button">Explore</a></td>
				</tr>
			</table>
		</div>
		<center>
		<div id="outerbox">
			<div id="sliderbox">
				<img src="image/Web-Design-Services.jpg" alt="Error!!" width="1200px" height="460">
				<img src="image/10.png" alt="Error!!" width="1200px" height="460">
				<img src="image/9.jpg" alt="Error!!" width="1200px" height="460">
				<img src="image/8.jpg" alt="Error!!" width="1200px" height="460">
				<img src="image/SLIDERwebdesign.jpg" alt="Error!!" width="1200px" height="460">
			</div>
		</div>
		</div>
		<br><br><br><br><br><br>  
			<a name="w1" id="w1" ><center>-</center></a>
			<table cellspacing="20" cellpadding="20">
					<tr>
						<td>
						<div>
							<img src="image/fashion-business-musings-735x475.jpg" class="clsFirstImage"/>
							</td><td><img src="image/fashion_websites_07.jpg" class="clsSecImage"/>
						</td>
						</div>
						<td align="right" class="cspa"><p align="center"><font color="gray" size="6">BE THE WEB DESIGNER OF YOUR WEBSITE</font></p>
						<p>Our platform provides you a wide variety of templates under various categories.Have the complete control over your website and customize any theme you want to.</p>
						</td>
					</tr>
					<tr>
						<td align="left" class="cspa"><p align="center"><font color="gray" size="6">ALL YOU NEED TO POWER YOUR BUSINESS</font></p>
						<p>Frosite helps you desgning the website to help you grow your business.Whether you are just getting started or a well name brand our platform provides you everything you need for your business.</p>
						</td>						
						<div>
							<td>
								<img src="image/csm_shutterstock_73748515_01_cf1fd34057_519ffe33ac.jpg" class="RclsFirstImage"/>
							</td>
							<td>
								<img align="right" src="image/boston-market.png" class="RclsSecImage"/>
							</td>
						</div>

					</tr>
					<tr>
						<div>
							<td>
								<img src="image/libraries-ebooks-orig.jpg" class="clsFirstImage"/>
							</td>
							<td>
								<img src="image/ereader-library1.jpg" class="clsSecImage"/>
							</td>							</div>
						<td align="right" class="cspa"><p align="center"><font color="gray" size="6">CLICK AND CUSTOMIZE</font></p>
						<p>Design your own website with easy concept of 'click and edit'.Change anything you want, add you own imae or video or use from the wide variety provided.</p>
						</td>
					</tr>
			</table>
			<br><br><br><br><br><br><br><br><hr>
			<center>
			<p>MAIL US AT</p>
			<p>frosite@gmail.com</p>
			</center>
			<hr>
			<br><br>
		</font>
	</body>
</html>'
;

}
else{
echo"you have enterd password";
$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}}
?>
