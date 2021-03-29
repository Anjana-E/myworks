<?php
// $connect = mysqli_connect("mysql:host=localhost;dbname=testing;port=3307","root
// 	", "");

$sname="localhost";
$uname="root";
$password="";
$db_name="testing";
$conn=mysqli_connect($sname,$uname,$password,$db_name,3307);
if(!$conn){
	echo "connection failed";
}
	

	?>