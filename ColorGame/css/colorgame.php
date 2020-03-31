<?php 
	$serverdb='localhost';
	$user="root";
	$pass="";
	$database='databasex';

	$name=$_POST["name"];
	$pass=$_POST["pass"];

	$conn=@mysqli_connect($serverdb,$user,$pass,$database)or die("Connection Unsuccessful".mysqli_connect_error());
	$query="INSERT INTO colorgame VALUES ('$name','$pass')";
	$insert=@mysqli_query($conn,$query);
	
	if($insert){
		header('Location:Login.html');
 		exit;
	}


 ?>