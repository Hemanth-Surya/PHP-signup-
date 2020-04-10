<html>
<head>
<style>
.img
{
background-image:url(../img/guard1.jpg);
height:120vh;
background-size:cover;
}
.content
{
	height:500px;
	width:450px;
	position:fixed;
	font-family:verdana;
	text-align:center;
	left:450px;
	top:50px;
	background:rgba(255,255,255,0.5);
	box-shadow:0 5px 15px rgba(0,0,0,0.5);
	
}
.content input[type=text],
.content input[type=email],
.content input[type=password]
{
	border:none;
	background:transparent;
	border-bottom:2px solid #fff;
	text-align:center;
}
.content input[type=submit]
{
height:30px;
color:black;
border:none;
background-color:#FFF8DC;
border-radius:70px;
cursor:pointer;
font-size:18px;
}
.content input[type=submit]:hover
{

box-shadow:0 5px 15px rgba(0,0,0,0.9);
}
</style>
</head>
<body>
<div class="img">
<div class="content">
<form method="GET">
<br>
<h1>Sign Up GUARDIANS!</h1>
<p>Name:</p><input type="text" name="name">
<p>E-mail:</p><input type="email" name="email">
<p>Password:</p><input type="password" name="password">
<p>Confirm Password:</p><input type="password" name="password1">
<br>
<br>
<br>
<input type="submit" value="BECOME A GUARDIAN!">
</form>
</div>
</div>
<?php
$sname="localhost";
$uname="root";
$pwd="";
$db="dbms1";
$conn=mysqli_connect($sname,$uname,$pwd,$db);
$var1=$_GET['name'];
$var2=$_GET['email'];
$var3=$_GET['password'];
$cmd="insert into galaxy(name,email,password) values ('$var1','$var2','$var3');";
$var4=mysqli_query($conn,$cmd);
?>
</body>
</html>