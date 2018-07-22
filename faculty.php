<!DOCTYPE html>
<html>
<head>
<title>Faculty</title>
<link rel="icon" href="images/logo.jpg">
</head>
<body>

<!--Faculty-->
<center>
<div class="container">
<div class="col-md-12 jumbotron">
<center><h3 style="background-color:#3399ff;padding:10px;box-shadow:1px 2px 3px lightgray;color:white;"><i class='fa fa-users'></i> Faculty</h3></center>

	<div class="col-md-4">
<img src="images/profile.png" id="v"><br>
<h2><b class="or">Faculty Name</h2>
<h4>Specification</h4>
<h5>Designation</h5>
	</div>
        <div class="col-md-4">
<img src="images/profile.png" id="v"><br>
<h2><b class="or">Faculty Name</h2>
<h4>Specification</h4>
<h5>Designation</h5>
    </div>
    <div class="col-md-4">
<img src="images/profile.png" id="v"><br>
<h2><b class="or">Faculty Name</h2>
<h4>Specification</h4>
<h5>Designation</h5>
    </div>
</div>

</div>
</center>

<style>
.or{font-family:ecrush;font-size:15px;color:magenta;}
#v{position:relative;border:3px solid lightgray;
    -webkit-animation: v 1s 1;  /* Chrome, Safari, Opera */
    -webkit-animation-play-state: play;  /* Chrome, Safari, Opera */
    animation: v 1s 1;
    animation-play-state: play;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes v {
    from {top: 30px;}
    to {top: 1px;}
}

@keyframes v {
    from {top: 30px;}
    to {top: 1px;}
}
#v{width:200px;height:200px;padding:10px;margin:20px;border-radius:10px;}
#v:hover{
border-radius:100px;
-webkit-transform:rotate(360deg);
transition:0.7s;
border:3px solid teal;
border-bottom:3px solid aqua;
border-left:3px solid aqua;
-webkit-filter: hue-rotate(90deg); /* Safari 6.0 - 9.0 */
    filter: hue-rotate(90deg);
box-shadow:1px 5px 50px gray;
padding:5px;
}
h2,h3{color:orange;font-family:ecrush,segoe print;}
h4{font-family:ecrush;font-family:ecrush;}
h5{color:teal;font-family:ecrush;font-size:20px;}
</style>