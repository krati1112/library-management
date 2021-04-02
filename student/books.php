<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<style type="text/css">
		.srch
		{
			padding-left: 500px;
		}
	</style>
</head>
<body>
	<!---------------search bar------------>
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books..." required="">
				<button style="background-color: blue;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
					
				</button>
			
			
		</form>
	</div>
	<h2>List Of Books</h2>
	<?php
	if(isset($_POST['submit']))
	{
		$q=mysqli_query($db,"select * from books where name like '%$_POST[search]%' ");
		if (mysqli_num_rows($q)==0) {
			echo "sorry! no books found";
			
		}
		else
		{
			echo "<table style='background-color:green;'>";
	echo"<tr style='background-color:green;'>";
	//table header
	echo"<th>";  echo "ID";  echo"</th>";
	echo"<th>" ; echo "BOOK_TITLE"; echo "</th> ";
	echo"<th>" ; echo "AUTHOR"; echo "</th> ";
	echo"<th>" ; echo "EDITION"; echo "</th> ";
	echo"<th>" ; echo "STATUS"; echo "</th> ";
	echo"<th>" ; echo "QUANTITY"; echo "</th> ";
	echo"<th>" ; echo "DEPARTMENT"; echo "</th> ";	
	echo"</tr>";
	while($row=mysqli_fetch_assoc($q))
	{
		echo"<tr>";
		echo "<td>"; echo $row['bid']; echo"</td>";
		echo "<td>"; echo $row['name']; echo"</td>";
		echo "<td>"; echo $row['authors']; echo"</td>";
		echo "<td>"; echo $row['edition']; echo"</td>";
		echo "<td>"; echo $row['status']; echo"</td>";
		echo "<td>"; echo $row['quantity']; echo"</td>";
		echo "<td>"; echo $row['department']; echo"</td>";
				echo"</tr>";

	}
	echo"</table>";
		}
	}
	else
	{
		$res=mysqli_query($db,"SELECT * FROM `books`;");
	echo "<table style='background-color:green;'>";
	echo"<tr style='background-color:green;'>";
	//table header
	echo"<th>";  echo "ID";  echo"</th>";
	echo"<th>" ; echo "BOOK_TITLE"; echo "</th> ";
	echo"<th>" ; echo "AUTHOR"; echo "</th> ";
	echo"<th>" ; echo "EDITION"; echo "</th> ";
	echo"<th>" ; echo "STATUS"; echo "</th> ";
	echo"<th>" ; echo "QUANTITY"; echo "</th> ";
	echo"<th>" ; echo "DEPARTMENT"; echo "</th> ";	
	echo"</tr>";
	while($row=mysqli_fetch_assoc($res))
	{
		echo"<tr>";
		echo "<td>"; echo $row['bid']; echo"</td>";
		echo "<td>"; echo $row['name']; echo"</td>";
		echo "<td>"; echo $row['authors']; echo"</td>";
		echo "<td>"; echo $row['edition']; echo"</td>";
		echo "<td>"; echo $row['status']; echo"</td>";
		echo "<td>"; echo $row['quantity']; echo"</td>";
		echo "<td>"; echo $row['department']; echo"</td>";
				echo"</tr>";

	}
	echo"</table>";
	}
	$res=mysqli_query($db,"SELECT * FROM `books`;");
	echo "<table style='background-color:green;'>";
	echo"<tr style='background-color:green;'>";
	//table header
	echo"<th>";  echo "ID";  echo"</th>";
	echo"<th>" ; echo "BOOK_TITLE"; echo "</th> ";
	echo"<th>" ; echo "AUTHOR"; echo "</th> ";
	echo"<th>" ; echo "EDITION"; echo "</th> ";
	echo"<th>" ; echo "STATUS"; echo "</th> ";
	echo"<th>" ; echo "QUANTITY"; echo "</th> ";
	echo"<th>" ; echo "DEPARTMENT"; echo "</th> ";	
	echo"</tr>";
	while($row=mysqli_fetch_assoc($res))
	{
		echo"<tr>";
		echo "<td>"; echo $row['bid']; echo"</td>";
		echo "<td>"; echo $row['name']; echo"</td>";
		echo "<td>"; echo $row['authors']; echo"</td>";
		echo "<td>"; echo $row['edition']; echo"</td>";
		echo "<td>"; echo $row['status']; echo"</td>";
		echo "<td>"; echo $row['quantity']; echo"</td>";
		echo "<td>"; echo $row['department']; echo"</td>";
				echo"</tr>";

	}
	echo"</table>";
	?>

</body>
</html>