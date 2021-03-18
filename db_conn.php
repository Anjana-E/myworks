<?php
$sname="localhost";
$uname="root";
$password="";
$db_name="work";
$conn=mysqli_connect($sname,$uname,$password,$db_name,3307);
if(!$conn){
	echo "connection failed";
}