<!doctype html>
<?php
session_start();
include "db_conn.php";
?>

<html lang="">
<style>
.container{
  margin-top: 40px;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.form-group{
	width: 200px;
}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title></title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Styles -->
    <link href="" rel="stylesheet">
</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                <img src="" style="width: 178px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>
        </div>
   

<div class="sidenav">
<div class="user-panel">
              <div class="pull-left image">
                <!-- <img src="https://st4.depositphotos.com/4329009/19956/v/600/depositphotos_199564354-stock-illustration-creative-vector-illustration-default-avatar.jpg" class="rounded-circle" alt="User Image" style="width: 78px;margin-top: 66px;"> -->
              </div>
              <div class="pull-left info" style="margin-top: 142px;">
                <!-- <h2 style="color:#fff;margin-top: 105px; margin-left: 26px;">{{ Auth::user()->name }}</h2> -->
                
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
              </div>
   </div>
   <!-- <button class="dropdown-btn">Users -->
    <!-- <i class="fa fa-caret-down"></i> -->
  <!-- </button> -->
   
  <!-- <button class="dropdown-btn">All Users -->
    <!-- <i class="fa fa-caret-down"></i> -->
  <!-- </button> -->
  
  <a href="adminhome.php">All Users</a>
  <a href="insertuser.php">Add Users</a>
  
  <!-- <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div> -->

</div>
<div class="main">
  <!-- <h2>Sidebar Dropdown</h2>
  <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Some random text..</p> -->
  <?php 

// $qry = "select * from users";
// $res = mysqli_query($conn,$qry);

//$row = mysqli_fetch_array($res);

// while($row = mysqli_fetch_array($res) ){
//    ?>
<!-- <li> -->
  <?php// echo $row['user_name'];?>
<!-- </li> -->

 <?php// }

?>

</div>

<div class="container text-center justify-content-center" style="margin-left: 250px; ">

<h1>Add User</h1>
     
<form action="" method="post" id="flogin"> 
<div class="border-box">

<div class="form-group">
<label for="uname" id="un">Username:</label>
<input  class="form-control" type="text" name="userins" required placeholder="Enter Username" id="uname">
</div>

 <div class="form-group">
<label for="upass" id="ps">Password:</label>
<input  class="form-control" type="password" name="passins" required placeholder="Enter Password" id="upass">
</div>
<div class="form-group">
<label for="urole" id="ps">Role:</label>
<input  class="form-control" type="urole" name="uroleins" required placeholder="Enter Role" id="urole">
 </div>
<div class="form-group">
<input type="submit" value="Insert"  name="btn_insert" class="btn btn-primary" id="submit"/>
 </div> 

<!-- <a href="http://localhost/myworks/forgotpass.php">forgot pass?</a> -->
 
</div>
 
</form>                 
 
 </div>

 <?php
  if(isset($_POST['btn_insert']))
        {
            $user=$_POST['userins'];

             $pass=$_POST['passins'];

             $type=$_POST['uroleins'];





       // $qry = "select * from users where user_name='".$user."' and password='".$pass."'";
        $sql="INSERT INTO users (user_name,password,type) VALUES('".$user."','".$pass."','".$type."')";
        $res = mysqli_query($conn,$sql);

        if($res){

        	?>
        	<script type="text/javascript">
        		alert("User inserted successfully");
        		window.location.href="adminhome.php";
        	</script>
        	<?php

        }

  // $row = mysqli_fetch_array($res);

        //$row['type'];
        
    //     if($row['type']=='user'){
    //     	header('location:userhome.php');
    //     }
    //     else if($row['type'] == 'admin')
			 // {
			 // header('location:adminhome.php');
			 // }
    //      exit;

    }

         ?>

</body>
</html>
