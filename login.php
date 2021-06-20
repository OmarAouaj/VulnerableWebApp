<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Application Web Vulnérable Pour Tests d'Intrusion</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				LOGIN PAGE
			</p>
        </div>
		
		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Username:  <input type="text" id="uid" name="uid"><br /></br />
				Password: <input type="password" id="password" name="password">
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p>
		</form>
        </div>
    
        
		<br />
		
      <div class="row marketing">
        <div class="col-lg-6">

<?php

if (!empty($_GET['msg'])) {
    echo "<font style=\"color:#FF0000\">Please login to continue.<br\></font\>";
}


if (!empty($_REQUEST['uid'])) {
$username = ($_REQUEST['uid']);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;

	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {
	
	$row = mysqli_fetch_array($result);
	
	if ($row){

	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];

	
	header('Location:home.php');
	}
}
	else{
		echo "<font style=\"color:#FF0000\"><br \>Invalid password!</font\>";
		
	}
}


?>

	</div>
	</div>
	  
	  
	  <div class="footer">
		<p>Made By AOUAJ Omar, EL FILALI Abdellah, EL JOUHARI Chaymae & RAHALI Oussama</p>
      </div>
	</div>
  
</body>
</html>