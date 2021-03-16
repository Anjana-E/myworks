<?php
session_start();

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
} 

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration form example</title>
 

 
</head>
 
<body>
 <form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>WELCOME <?php echo $_SESSION['uname']; ?></h2>

 
<input type="submit" value="Logout"  name="but_logout" id="submit"/>
 </div>
 
</form>
</div>
 
</body>
</html>