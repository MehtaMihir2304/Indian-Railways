<HTML>
<HEAD>
<TITLE>Indian Railways</TITLE>
<style type="text/css">
#logo	{ 
	border-radius: 45px;
    border: 1px solid blue; 
    width: 150px;
    height: 150px; 
}
*	{
	color: white;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 110%;
  min-height: 110%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#main	{
		width:700px;
		height: 400px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>
</HEAD>
<BODY>
<video autoplay muted loop id="myVideo">
  <source src="1.mp4" type="video/mp4">
</video>
<div class="content">
<?php 
session_start();
include("h1.php"); ?>
<div id="main"><div id="logo">
<A href="r1.php">
<IMG SRC="1.jpg" alt="Home" id="logo" width="150" height="150"></IMG>
</A></div>
<h1 align="center">Welcome to Indian Railways </h1><br/><br/><br/>
<h2 align="center">Have a safe journey with us</h2>
<br/><br/><br/>
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="register.php">Book here</a></h3>';
else
  echo '<h3 align="center"><a href="register.php">Please register/login before booking</a></h3>';
?>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</BODY>
</HTML>