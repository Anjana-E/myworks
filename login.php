<!DOCTYPE html>

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

if(isset($_POST['btn_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);
    //$succ = "Login Successfull";


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            //$_SESSION['succ'] = $succ;
            header('Location: welcome.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
 ?>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration form example</title>
 
<link rel="stylesheet" type="text/css" href="login.css">
 
</head>
 
<body>
 
<div id="container">

	<?php

	if(isset($_SESSION['passupdated'])){
    ?>
    <script type="text/javascript">
    	alert('Password Updated');
    </script>
    <?php
}

	 ?>
<form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Form</h2>
<label for="uname" id="un">Username:</label>
<input type="text" name="user" required placeholder="Enter Username" id="uname"><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" required placeholder="Enter Password" id="upass"><br/>
 
<input type="submit" class="button" value="Login"  name="btn_submit" id="submit"/>
  

<a href="http://localhost/myworks/forgotpass.php">forgot pass?</a>
 
</div>
 
</form>
</div>
 
</body>
</html>