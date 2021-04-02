<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>library management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css"></style>
<body>
		<div class="wrapper">
		
			
		<header>
			<div class="logo">

			<img src="images/2.jpg">
			<h1 style="color: orange">ONLINE LIBRARY MANAGEMENT SYSTEM</h1></div>
			<?php
			if(isset($_SESSION['login_user']))
				{?>
				<nav>

				<ul>
					<li><a href="index1.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
<?php
		}
		else
		{
			?>
			<nav>

				<ul>
					<li><a href="index1.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
			<?php
		}

			?>
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
			<section><div class="sec_image">
				<br><br><br>
				<div class="box">
					<h1 style="text-align: center; font-size: 35px">Welcome to library</h1>
					<h1 style="text-align: center; font-size: 22px">Opens at 10:00am</h1>
					<h1 style="text-align: center; font-size: 22px">closes at 5:00pm</h1>
					
				</div></div>
			</section>
			
				
				
		
		</div>
		<?php
		include "footer.php";
		?>
</body>
</html>