<?php

$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="mybook";

$con=mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>