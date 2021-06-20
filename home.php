<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HOME PAGE</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Welcome <?php echo $_SESSION["username"]; ?>!! You are now logged in!</a>
			</p>
        </div>
		<div class="jumbotron" style="background-color: black">
			<p class="lead" style="color:white;">
				This is a multi-feature site. In fact, you can either:</a><br/><br/>
			</p>
			<p class="lead" style="color:white;text-align: left;">
				- Ping an IP address, to do that <a href="pingIP.php">click here</a> !!</a> <br/>
				- Print anything you want, you can even print bold characters!! To do that <a href="print.php">click here</a> !!</a><br/>
				- Check out our best articles, to do that <a href="articles.php">click here</a> !!</a><br/>
			</p>
        </div>
	  <div class="footer">
		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
		<p>Made By AOUAJ Omar, EL FILALI Abdellah, EL JOUHARI Chaymae & RAHALI Oussama</p>
      </div>

	</div>
  
</body>
</html>