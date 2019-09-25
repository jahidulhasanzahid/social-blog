<?php 
include ("connect.inc.php");
session_start();
if (!isset($_SESSION["user_login"])) 
{
  $user_name = "";
} 
else
{
    $user_name = $_SESSION["user_login"];
}
 ?>
<!doctype html>
<html>
	<head>
	 <title>3F! Find Friend With Friends!</title>
	 <link rel="stylesheet" type="text/css" href="./css/style.css" />
	 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
   <script type="text/javascript" rel="stylesheet" src="css/bootstrap.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
   <script src="js/main.js" type="text/javascript"></script>

	</head>

<body>
<div class="container-fluid">
<nav class="navbar navbar-inverse" style="opacity: 0.9; filter: alpha(opacity=90);">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="col-md-1">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">3F!</a>
      <p style="font-size: 7px; color: white; margin-top: 10px;" >Find Friend With Friends!</p>
    </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="col-md-11">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right navbar navbar-inverse">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <?php
        if(!$user_name){
        echo '<li><a href="index.php">Sign Up</a></li>';
        echo '<li><a href="index.php">sign In</a></li>';
      }
      else{
         echo '<li><a href="'.$user_name.'">Profile</a></li>';
         echo '<li><a href="A_S.php">Account setting</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
      }

        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>

</div>
</body>