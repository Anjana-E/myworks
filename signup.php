<!DOCTYPE html>
<html>
  <head>
         <title>Login</title>
         <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="login-box">
  <div class="tabcontent`">
<div id="login">
  <form action="signupcheck.php" method="POST">
      <h1>LOGIN</h1>
      <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

              <div class="textbox">

                          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name" required
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name" required><br>
          <?php }?>  
                           
                       </div>
  <div class="textbox">

                              <input type="password"
                 name="password"
                 placeholder="Password"><br>
</div>

         

      <button type="submit" name="submit" value="submit" id="submit">
      <p>LOGIN </p>
      </button>
         
</form>
</body>
</html>
         
 
