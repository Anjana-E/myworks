<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<?php 

session_start();
include "db_conn.php";
?>
Welcome <?php echo $_SESSION['uname']; ?>

</body>
</html>

