<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			background-image: url("images/30.png");
		}
		.wrapper
		{   padding: 10px;
			margin: 20px auto;
			height: 600px;
			width: 600px;
			background-color: black;
			opacity: .8;
			color: white;
		}
		.form-control
		{
			height: 60px;
			width: 600px;
		}
	</style>
	}
</head>
<body>
	<div class="wrapper">
		<h3>if you have any suggestions or questions please comment below.</h3>
		<form style="" action="" method="post">
			<input class="form-control" type="text" name="comment" placeholder="write something..."><br><br>
			<input class="btn btn-default" type="submit" name="submit" value="comment">
			
		</form>
	
	<div>
		<?php
		if (isset($_POST['submit'])) {

			$sql="insert into `comments` values('', '$_POST[comment]');";
			if(mysqli_query($db,$sql))
			{
				$q="SELECT * FROM `comments` ORDER BY `comment` DESC";
				$res=mysqli_query($db,$q);
				while($row=mysqli_fetch_assoc($res))
				{
                   echo "<tr>";
                   echo "<td>"; echo $row['comment']; echo "</td>";

                   echo "</tr>";
				}
			}
		}
		else
		{
			$q="SELECT * FROM `comments` ORDER BY `comment` DESC";
				$res=mysqli_query($db,$q);
				while($row=mysqli_fetch_assoc($res))
				{
                   echo "<tr>";
                   echo "<td>"; echo $row['comment']; echo "</td>";

                   echo "</tr>";
				}
		}
		?>
	</div>
	</div>

</body>
</html>