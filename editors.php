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
  color: darkturquoise;
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
  font-size: 15px; /* Increased text to enable scrolling */
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
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  
  <a href="#">EDITORS PAGE</a>
  
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
<div class="login-box">
  <div class="tabcontent`">
   <div id="login">
     <form action="#" method="post">
      <h2>UPDATE</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
                  
         
         
                  <div class="textbox">
                 <?php if (isset($_GET['item'])) { ?>
               <input type="text" 
                      name="user_name" 
                      placeholder="Name" required 
                      value="<?php echo $_GET['item']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="user_name" 
                      placeholder="Name" required><br>
          <?php }?>   
                            
    </div>
             <div class="textbox">

                              <input type="text" 
                 name="password" 
                 placeholder="password"><br> 
         </div>
         
          
         <button type="submit" name="submit" value="submit" id="submit">
      <p>UPDATE </p>
    </button>
     <?php

  if(isset($_POST['submit']))
  { 
     
    $user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql_query="UPDATE users  set user_name='$user_name',password='$password where user_name='".$user_name."'";
    $result=mysqli_query($conn,$sql_query);
    if($result){
       echo  " updated";}
       else{
       echo "error";
    }
    }
  // mysqli_close($conn);
?>
      
      
     </form></div></div></div>
</body>
</html>
     