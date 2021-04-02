<?php
$db = mysqli_connect("localhost" ,"root" ,"" ,"lms"); //server name,default username and password,database name
if(!$db)
{
	die("Connection failed: ");
}
echo "Connected successfully.";
?>