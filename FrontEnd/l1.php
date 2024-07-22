<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","rj");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM data WHERE email = '$email' AND password = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("email");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("pw");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
   		if(pw.value.length< 8)
		{
			alert("Password consists of atleast 8 characters");
			pw.focus();
			return false;
		}
		return true;
	}
</script>
<style type="text/css">
	#loginarea{
		background-color: white;
		width: 30%;
		margin: auto;
		border-radius: 25px;
		border: 2px solid blue;
		margin-top: 100px;
		background-color: rgba(0,0,0,0.2);
	    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
	    padding: 40px;
	    font-family:sans-serif;
		font-size: 20px;
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
	#submit	{
		border-radius: 5px;
		background-color: rgba(0,0,0,0);
		padding: 7px 7px 7px 7px;
		box-shadow: inset -1px -1px rgba(0,0,0,0.5);
		font-family:"Comic Sans MS", cursive, sans-serif;
		font-size: 25px;
		margin:auto;
		margin-top: 20px;
  		display:block;
  		color: white;
	}
	#logintext	{
		text-align: center;
	}
	.data	{
		color: white;
	}
</style>
<body>
<video autoplay muted loop id="myVideo">
  <source src="3.mp4" type="video/mp4">
</video>
<div class="content">
	<div class="imgcontainer">
  </div>
  <?php include("h1.php") ?>
	<div id="loginarea">
	<form id="login" action="l1.php" onsubmit="return validate()" method="post" name="login">
					
					<div id="logintext">Login to Indian Railways</div><br/>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Username" autocomplete="off">
						</div><br/>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="pw" id="pw" placeholder="Password" autocomplete="off">
						</div><br/>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p>Not registered? <a href="signup.php">Sign Up</a> | <a href="forgot.php">Forgot Password?</a></p>
						</div>
						<div class="form-group">
							<INPUT TYPE="Submit" value="Sign In" name="submit" id="submit" class="button">
						</div>
					</form>
					</div>
				<br/><br/><br/><br/><br/><br/>
				<br/><br/><br/><br/><br/><br/>
			</div>
			
	</form></div>
</body>
</html>