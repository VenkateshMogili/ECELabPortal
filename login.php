<?php
session_start();
error_reporting(0);
?>
<html>
<title>Login</title>
<link rel="icon" href="images/profile.png">
<link rel="stylesheet" href="css/bootstrap.css">
<style>
input{padding:10px;border-radius:5px;color:#3399cc;margin:10px;border:2px solid #3399cc;font-family:lucida sans;}
input:hover{border:2px solid white;transition:1s;}
input:focus{transition:1s;border:2px solid white;}
button{padding:10px;width:100px;margin:10px;border:0px;border-radius:100px;transition:1s;color:white;border:2px solid white;background-color:#3399cc;font-family:georgia;}
button:hover{background-color:white;color:#3399cc;transition:1s;cursor:pointer;}
</style>
</head>
<?php
require_once 'connect.php';
?>
<body style="background-color:whitesmoke">
<br><br><br><br><br>
<div class="container" style="background-color:gray;border-radius:10px;border-top:3px solid #100030;width:50%;box-shadow:1px 2px 3px black">
	<center><img src="images/profile.png" style="width:100px;height:100px;margin:10px;border-radius:100px;border:2px solid white;padding:2px;"><br><h3 style="color:white;font-family:lucida sans;">Login</h3></center>
	<form action="check_login.php" method="post">
	<center>
	<input type="text" placeholder="UserId: Ex:N130010" name="stuid" minlength="7" autofocus required><br>
	<input type="password" placeholder="Password: ******" name="password" minlength="3" required><br>
	<button type="submit" name="login">Login</button>
</form>
</div>
</center>
</body>

