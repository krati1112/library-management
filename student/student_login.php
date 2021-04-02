<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<!---<nav class="navbar navbar-inverse">
			<div class="container-fluid">
		<div class="navbar-header">

			<img src="images/2.jpg">
			<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a></div>
			

				<ul class="nav navbar-nav">
					<li><a href="index1.html">HOME</a></li>
					<li><a href="">BOOKS</a></li>
					
					<li><a href="">FEEDBACK</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" >
				<li><a href="student_login">STUDENT-LOGIN</a></li>
				<li><a href="registration.html">REGISTRATION</a></li></ul>
			</div>
			</nav>!--->
	
	<header style="height: 150px;">
		<div class="logo">

			<img src="images/2.jpg">
			<h1 style="color: orange">ONLINE LIBRARY MANAGEMENT SYSTEM</h1></div>
			<nav>

				<ul>
					<li><a href="index1.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
	</header>
	<section>
		<div class="log_img">
			<br>
			<div class="box1">
				<h1 style="text-align: center;color: white; font-size: 50px">User Login</h1><br><br>
				<form name="login" action="" method="post">
					<div class="signin">
					<input class="form-control" type="text" name="username" placeholder="Username" required=""><br><br>
					<input class="form-control" type="password" name="password" placeholder="Password" required=""><br><br>
					<input class="btn btn-default" type="submit" name="submit" value="Signin" style="width: 60px"></div>
					
				
				<p style="color: white">
					<a href="">forgot password?</a>&nbsp &nbsp &nbsp
					New User?<a href="registration.html">Signup</a>
				</p>
			</form>
			</div>
		</div>
	</section>
	<?php
         if(isset($_POST['submit']))
         {  $count=0;
         	$res=mysqli_query($db,"SELECT * FROM `student` where username='$_POST[username]' && password='$_POST[password]';");
         	$count=mysqli_num_rows($res);
         	if($count==0)
         	{
         		?>
         		<script type="text/javascript">
         			alert("username and password does not match");
         		</script>
         		<?php
         	}
         	else
         	{   $_SESSION['login_user']=$_POST['username'];
         		?>
         		<script type="text/javascript">
         			window.location="index1.php"
         		</script>
         		<?php
         	}
         }

	?>

</body>
</html>