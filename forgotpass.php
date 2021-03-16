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


if(isset($_POST['update_btn'])){

    $uname = mysqli_real_escape_string($con,$_POST['user']);
    $newpassword = mysqli_real_escape_string($con,$_POST['newpass']);
    //$succ = "Login Successfull";


    if ($uname != "" && $newpassword != ""){

        $sql_query = "UPDATE users SET password='$newpassword' where username='".$uname."'";
        $result = mysqli_query($con,$sql_query);


        if($result){
            $_SESSION['passupdated'] = "Password updated Successfully";
            //$_SESSION['succ'] = $succ;
            header('Location: login.php');
        }else{
        	session_destroy();
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
 <form action="" method="post" id="
 ">
 
<div class="border-box">
<h2>PASSWORD CHANGE</h2>
<label for="uname" id="un">username:</label>
<input type="text" name="user" placeholder="Enter Username" id="uname"><br/>
 
<label for="upass" id="ps">Retypepass:</label>
<input type="password" name="newpass" placeholder="Enter Password" id="upass"><br/>
 
<input type="submit" value="Update"  name="update_btn" id="submit" />
 </div>
 
</form>
</div>
 
</body>
</html>