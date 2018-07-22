<!--Designed and Developed by Venkatesh Mogili,N130010 ,CSE-3-->
<!DOCTYPE html>
<html>
<head>
	<title>ECE Lab Portal</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
	#loader{font-size:4em;color:blue;}
	a:hover{border:1px solid orange;border-right:3px solid #3399ff;border-left:3px solid #3399ff;transition:all 0.5s;border-radius:100px;}
	#box{background-color:white;box-shadow:1px 1px 5px 10px teal;transition:0.5s;border-radius:5px;}
	#box:hover{background-color:lightgray;box-shadow:1px 1px 5px 10px orange;transition:0.8s;border-radius:100px;}
	a{color:brown;transition:0.8s;font-family:lucida sans;}
	#load {background: url('images/loader_new.gif') center no-repeat;}
	</style>
	<link rel="stylesheet" href="css/font/css/font-awesome.css">
</head>
<?php
session_start();
error_reporting(0);
require 'connect.php';
?>
<body style="background-image:url('images/a10.png');background-size:100% 120%;background-attachment:fixed">
	<nav class="navbar navbar-inverse" style="position:fixed;top:0%;left:0%;width:100%;z-index:9;padding:10px;border-radius:0px;border-top:2px solid white;border-bottom:2px solid orange;background:#100033;box-shadow:1px 2px 30px 10px gray;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <b class="navbar-brand" href="" style="color:white;font-family:lucida sans"><i class="fa fa-user my"></i> ECE Lab Portal</b>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#" onclick="load_page('resources.php')"><i class="fa fa-folder"></i> Resources</a></li>
        <li><a href="#" onclick="load_page('equipments.php')"><i class="fa fa-gear"></i> Equipments</a></li>
        <li><a href="#" onclick="load_page('projects.php')"><i class="fa fa-book"></i> Previous Projects</a></li>
        <li><a href="#" onclick="load_page('faculty.php')"><i class="fa fa-users"></i> Faculty</a></li> 
        <li><a href="#" onclick="load_page('about.php')"><i class="fa fa-user"></i> About Us</a></li> 
        <li><a href="#" onclick="load_page('contact.php')"><i class="fa fa-phone"></i> Contact Us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="link">
<?php
if(isset($_SESSION['stuid']))
    {
      $student=$_SESSION['stuid'];
    ?>
    <i class="fa fa-user"></i> <?php echo $student;?><span class="caret"></span></a>
    <ul class="dropdown-menu" style="background-color:#3399ff;">
      <li class="dr"><a href="#" onclick="load_page('view_profile.php')"><i class="fa fa-eye menu"></i> View Profile</a></li>
      <li class="dr"><a href="#" onclick="load_page('editprofile.php')"><i class="fa fa-edit menu"></i> Edit Profile</a></li>
      <li class="dr"><a href="#" onclick="load_page('changepassword.php')"><i class="fa fa-key menu"></i> Change Password</a></li>
    <?php
echo "<li class='dr'><a href='logout.php'><i class='fa fa-unlock'></i> Logout</a></li>
      </ul></li>";
  }
  else{
    echo '<li class="dr"><a href="#" id="link" onclick="load_page(\'login.php\')"><i class="fa fa-lock"></i> Login</a></li>';
  }
?>
</ul>
</ul>
    </div>
  </div>
</nav>
	<br><br><br><br><br>
	<div class="col-md-12" style="height:100%;" id="loading">
	<div id="load" style="width:100%;height:100%;position:fixed;top:0%;left:0%;z-index:99;"></div>
	
	<div class="container">
	<div class="jumbotron">
	<img src="images/profile.png" style="width:100px;height:100px;border-radius:100px;">
	<br>
	<p>Description:</p>
	<br>
	<img src="images/profile.png" style="width:100px;float:right;height:100px;border-radius:100px;">
	<br><br><br><br><br>
	<p align="right">Description:</p>
	<img src="images/profile.png" style="width:100px;height:100px;border-radius:100px;">
	<br>
	<p>Description:</p>
	<br>
	<img src="images/profile.png" style="width:100px;float:right;height:100px;border-radius:100px;">
	<br><br><br><br><br>
	<p align="right">Description:</p>
	<img src="images/profile.png" style="width:100px;height:100px;border-radius:100px;">
	<br>
	<p>Description:</p>
	<br>
	<img src="images/profile.png" style="width:100px;float:right;height:100px;border-radius:100px;">
	<br><br><br><br><br>
	<p align="right">Description:</p>
	</div>
	</div>
	</div>
	
	<div style="position:fixed;bottom:0%;left:0%;width:100%;background-color:#100033;padding:1px;">
		<center><i style="color:white;">&reg; Admin Name
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&copy;Developed By Venkatesh Mogili,N130010
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&reg; RGUKT-IIIT-NUZVID</i></center>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>
<script>
  $(window).load(function() {
    $("#load").fadeOut("slow");
  });
</script>