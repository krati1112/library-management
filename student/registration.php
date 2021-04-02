<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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
		<div class="reg_img">
			<div class="box2">
				<h1 style="text-align: center;color: white; font-size: 50px">User Registration</h1><br>
				<form name="Registration" action="" method="post">
					<div class="signup">
						<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br><br>
						<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br><br>
						<input class="form-control" type="text" name="email" placeholder="Email id" required=""><br><br>
						<input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br><br>
					<input class="form-control" type="text" name="username" placeholder="Username" required=""><br><br>
					<input class="form-control" type="password" name="password" placeholder="Password" required=""><br><br>
					<input class="btn btn-default" type="submit" name="submit" value="Signup" style="width: 70px"></div>
					
				</form>
				
			</div>
		</div>
	</section>
	<?php
      if(isset($_POST['submit']))
      {
      	$count=0;
      	$sql="select username from student";
      	$res=mysqli_connect($db,$sql);
      	while($row=mysqli_fetch_assoc($res))
      	{
      		if($row['username']==$_POST['username'])
      		{
      			$count=$count+1;
      		}
      	}
      	if($count==0)
      	{
      	mysqli_query($db,"insert into `student` values('$_POST[first]','$_POST[last]', '$_POST[email]', '$_POST[roll]', '$_POST[username]','$_POST[password]');");
      ?>
      <script type="text/javascript">
      	
      alert("Registration Successful");
      </script>
      <?php
  }
  else

  {
     ?>
      <script type="text/javascript">
      	
      alert("username alraedy exist");
      </script>
      <?php
	}
  }
  ?>

</body>